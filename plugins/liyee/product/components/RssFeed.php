<?php namespace Liyee\Product\Components;

use Lang;
use Response;
use Cms\Classes\Page;
use Liyee\Product\Models\Post as BlogPost;
use Liyee\Product\Classes\ComponentAbstract;
use Liyee\Product\Models\Category as BlogCategory;

class RssFeed extends ComponentAbstract
{
    /**
     * A collection of posts to display
     * @var Collection
     */
    public $posts;

    /**
     * If the post list should be filtered by a category, the model to use.
     * @var Model
     */
    public $category;

    /**
     * Reference to the page name for the main product page.
     * @var string
     */
    public $productPage;

    /**
     * Reference to the page name for linking to posts.
     * @var string
     */
    public $postPage;

    public function componentDetails()
    {
        return [
            'name'        => 'liyee.product::lang.settings.rssfeed_title',
            'description' => 'liyee.product::lang.settings.rssfeed_description'
        ];
    }

    public function defineProperties()
    {
        return [
            'categoryFilter' => [
                'title'       => 'liyee.product::lang.settings.posts_filter',
                'description' => 'liyee.product::lang.settings.posts_filter_description',
                'type'        => 'string',
                'default'     => '',
            ],
            'sortOrder' => [
                'title'       => 'liyee.product::lang.settings.posts_order',
                'description' => 'liyee.product::lang.settings.posts_order_description',
                'type'        => 'dropdown',
                'default'     => 'created_at desc',
            ],
            'postsPerPage' => [
                'title'             => 'liyee.product::lang.settings.posts_per_page',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'liyee.product::lang.settings.posts_per_page_validation',
                'default'           => '10',
            ],
            'productPage' => [
                'title'       => 'liyee.product::lang.settings.rssfeed_product',
                'description' => 'liyee.product::lang.settings.rssfeed_product_description',
                'type'        => 'dropdown',
                'default'     => 'product/post',
                'group'       => 'liyee.product::lang.settings.group_links',
            ],
            'postPage' => [
                'title'       => 'liyee.product::lang.settings.posts_post',
                'description' => 'liyee.product::lang.settings.posts_post_description',
                'type'        => 'dropdown',
                'default'     => 'product/post',
                'group'       => 'liyee.product::lang.settings.group_links',
            ],
        ];
    }

    public function getBlogPageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function getPostPageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function getSortOrderOptions()
    {
        $options = BlogPost::$allowedSortingOptions;

        foreach ($options as $key => $value) {
            $options[$key] = Lang::get($value);
        }

        return $options;
    }

    public function onRun()
    {
        $this->prepareVars();

        $xmlFeed = $this->renderPartial('@default');

        return Response::make($xmlFeed, '200')->header('Content-Type', 'text/xml');
    }

    protected function prepareVars()
    {
        $this->productPage = $this->page['productPage'] = $this->property('productPage');
        $this->postPage = $this->page['postPage'] = $this->property('postPage');
        $this->category = $this->page['category'] = $this->loadCategory();
        $this->posts = $this->page['posts'] = $this->listPosts();

        $this->page['link'] = $this->pageUrl($this->productPage);
        $this->page['rssLink'] = $this->currentPageUrl();
    }

    protected function listPosts()
    {
        $category = $this->category ? $this->category->id : null;

        /*
         * List all the posts, eager load their categories
         */
        $posts = BlogPost::with('categories')->listFrontEnd([
            'sort'     => $this->property('sortOrder'),
            'perPage'  => $this->property('postsPerPage'),
            'category' => $category
        ]);

        /*
         * Add a "url" helper attribute for linking to each post and category
         */
        $productPostComponent = $this->getComponent('productPost', $this->postPage);

        $posts->each(function ($post) use ($productPostComponent) {
            $post->setUrl($this->postPage, $this->controller, [
                'slug' => $this->urlProperty($productPostComponent, 'slug')
            ]);
        });

        return $posts;
    }

    protected function loadCategory()
    {
        if (!$categoryId = $this->property('categoryFilter')) {
            return null;
        }

        if (!$category = BlogCategory::whereSlug($categoryId)->first()) {
            return null;
        }

        return $category;
    }
}
