<?php namespace Liyee\Product\Components;

use Event;
use BackendAuth;
use Cms\Classes\Page;
use Liyee\Product\Models\Post as ProductPost;
use Liyee\Product\Classes\ComponentAbstract;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Post extends ComponentAbstract
{
    /**
     * @var ProductPost The post model used for display.
     */
    public $post;

    /**
     * @var string Reference to the page name for linking to categories.
     */
    public $categoryPage;

    public function componentDetails()
    {
        return [
            'name'        => 'liyee.product::lang.settings.post_title',
            'description' => 'liyee.product::lang.settings.post_description'
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title'       => 'liyee.product::lang.settings.post_slug',
                'description' => 'liyee.product::lang.settings.post_slug_description',
                'default'     => '{{ :slug }}',
                'type'        => 'string',
            ],
            'categoryPage' => [
                'title'       => 'liyee.product::lang.settings.post_category',
                'description' => 'liyee.product::lang.settings.post_category_description',
                'type'        => 'dropdown',
                'default'     => 'product/category',
            ],
        ];
    }

    public function getCategoryPageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function init()
    {
        Event::listen('translate.localePicker.translateParams', function ($page, $params, $oldLocale, $newLocale) {
            $newParams = $params;

            foreach ($params as $paramName => $paramValue) {
                $records = ProductPost::transWhere($paramName, $paramValue, $oldLocale)->first();

                if ($records) {
                    $records->translateContext($newLocale);
                    $newParams[$paramName] = $records[$paramName];
                }
            }
            return $newParams;
        });
    }

    public function onRun()
    {
        $this->categoryPage = $this->page['categoryPage'] = $this->property('categoryPage');
        $this->post = $this->page['post'] = $this->loadPost();
    }

    public function onRender()
    {
        if (empty($this->post)) {
            $this->post = $this->page['post'] = $this->loadPost();
        }
    }

    protected function loadPost()
    {
        $slug = $this->property('slug');

        $post = new ProductPost;

        $post = $post->isClassExtendedWith('Liyee.Translate.Behaviors.TranslatableModel')
            ? $post->transWhere('slug', $slug)
            : $post->where('slug', $slug);

        if (!$this->checkEditor()) {
            $post = $post->isPublished();
        }

        try {
            $post = $post->firstOrFail();
        } catch (ModelNotFoundException $ex) {
            $this->setStatusCode(404);
            return $this->controller->run('404');
        }

        /*
         * Add a "url" helper attribute for linking to each category
         */
        if ($post && $post->categories->count()) {
            $productPostsComponent = $this->getComponent('productPosts', $this->categoryPage);

            $post->categories->each(function ($category) use ($productPostsComponent) {
                $category->setUrl($this->categoryPage, $this->controller, [
                    'slug' => $this->urlProperty($productPostsComponent, 'categoryFilter')
                ]);
            });
        }

        return $post;
    }

    public function previousPost()
    {
        return $this->getPostSibling(-1);
    }

    public function nextPost()
    {
        return $this->getPostSibling(1);
    }

    protected function getPostSibling($direction = 1)
    {
        if (!$this->post) {
            return;
        }

        $method = $direction === -1 ? 'previousPost' : 'nextPost';

        if (!$post = $this->post->$method()) {
            return;
        }

        $postPage = $this->getPage()->getBaseFileName();

        $productPostComponent = $this->getComponent('productPost', $postPage);
        $productPostsComponent = $this->getComponent('productPosts', $this->categoryPage);

        $post->setUrl($postPage, $this->controller, [
            'slug' => $this->urlProperty($productPostComponent, 'slug')
        ]);

        $post->categories->each(function ($category) use ($productPostsComponent) {
            $category->setUrl($this->categoryPage, $this->controller, [
                'slug' => $this->urlProperty($productPostsComponent, 'categoryFilter')
            ]);
        });

        return $post;
    }

    protected function checkEditor()
    {
        $backendUser = BackendAuth::getUser();

        return $backendUser && $backendUser->hasAccess('liyee.product.access_posts');
    }
}
