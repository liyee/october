<?php namespace Liyee\Product;

use Backend;
use Controller;
use Liyee\Product\Models\Post;
use System\Classes\PluginBase;
use Liyee\Product\Classes\TagProcessor;
use Liyee\Product\Models\Category;
use Event;


class Plugin extends PluginBase
{
    
    public function pluginDetails()
    {
        return [
            'name'        => 'Product',
            'description' => 'Merchandise management and display.',
            'author'      => 'liyee',
            'icon'        => 'icon-product-hunt',
        ];
    }
    
    public function registerComponents()
    {
        return [
            'Liyee\Product\Components\Post'       => 'productPost',
            'Liyee\Product\Components\Posts'      => 'productPosts',
            'Liyee\Product\Components\Categories' => 'productCategories',
            'Liyee\Product\Components\RssFeed'    => 'productRssFeed'
        ];
    }
    
    public function registerNavigation(){
        return [
            'product' => [
                'label' => 'liyee.product::lang.product.menu_label',
                'url' => Backend::url('liyee/product/posts'),
                'iconSvg'     => 'plugins/liyee/product/assets/images/product-icon.svg',
                'permissions' => ['liyee.product.*'],
                'order'       => 300,
                
                'sideMenu' => [
                    'new_post' => [
                        'label'       => 'liyee.product::lang.posts.new_post',
                        'icon'        => 'icon-plus',
                        'url'         => Backend::url('liyee/product/posts/create'),
                        'permissions' => ['liyee.product.access_posts']
                    ],
                    'posts' => [
                        'label'       => 'liyee.product::lang.product.posts',
                        'icon'        => 'icon-copy',
                        'url'         => Backend::url('liyee/product/posts'),
                        'permissions' => ['liyee.product.access_posts']
                    ],
                    'categories' => [
                        'label'       => 'liyee.product::lang.product.categories',
                        'icon'        => 'icon-list-ul',
                        'url'         => Backend::url('liyee/product/categories'),
                        'permissions' => ['liyee.product.access_categories']
                    ]
                ]
            ],
        ];
    }
    
    public function boot()
    {
        /*
         * Register menu items for the RainLab.Pages plugin
         */
        Event::listen('pages.menuitem.listTypes', function() {
            return [
                'product-category'       => 'liyee.product::lang.menuitem.product_category',
                'all-product-categories' => 'liyee.product::lang.menuitem.all_product_categories',
                'product-post'           => 'liyee.product::lang.menuitem.product_post',
                'all-product-posts'      => 'liyee.product::lang.menuitem.all_product_posts',
                'category-product-posts' => 'liyee.product::lang.menuitem.category_product_posts',
            ];
        });
            
        Event::listen('pages.menuitem.getTypeInfo', function($type) {
            if ($type == 'product-category' || $type == 'all-product-categories') {
                return Category::getMenuTypeInfo($type);
            }
            elseif ($type == 'product-post' || $type == 'all-product-posts' || $type == 'category-product-posts') {
                return Post::getMenuTypeInfo($type);
            }
        });
                
        Event::listen('pages.menuitem.resolveItem', function($type, $item, $url, $theme) {
            if ($type == 'product-category' || $type == 'all-product-categories') {
                return Category::resolveMenuItem($item, $url, $theme);
            }
            elseif ($type == 'product-post' || $type == 'all-product-posts' || $type == 'category-product-posts') {
                return Post::resolveMenuItem($item, $url, $theme);
            }
        });
    }
    
    public function registerPermissions()
    {
        return [
            'liyee.product.manage_settings' => [
                'tab'   => 'liyee.product::lang.product.tab',
                'label' => 'liyee.product::lang.product.manage_settings'
            ],
            'liyee.product.access_posts' => [
                'tab'   => 'liyee.product::lang.product.tab',
                'label' => 'liyee.product::lang.product.access_posts'
            ],
            'liyee.product.access_categories' => [
                'tab'   => 'liyee.product::lang.product.tab',
                'label' => 'liyee.product::lang.product.access_categories'
            ],
            'liyee.product.access_other_posts' => [
                'tab'   => 'liyee.product::lang.product.tab',
                'label' => 'liyee.product::lang.product.access_other_posts'
            ],
            'liyee.product.access_import_export' => [
                'tab'   => 'liyee.product::lang.product.tab',
                'label' => 'liyee.product::lang.product.access_import_export'
            ],
            'liyee.product.access_publish' => [
                'tab'   => 'liyee.product::lang.product.tab',
                'label' => 'liyee.product::lang.product.access_publish'
            ]
        ];
    }
    
}