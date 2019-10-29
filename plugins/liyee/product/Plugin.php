<?php namespace Liyee\Product;

use Backend;
use Controller;
use System\Classes\PluginBase;


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
            '\Liyee\Product\Components\Product' => 'product'
        ];
    }
    
    public function registerNavigation(){
        return [
            'product' => [
                'label' => 'liyee.product::lang.product.menu_label',
                'url' => Backend::url('liyee/product/products'),
                'iconSvg'     => 'plugins/liyee/product/assets/images/product-icon.svg',
                'permissions' => ['rainlab.blog.*'],
                'order'       => 300,
            ],
        ];
    }
}