<?php namespace RainLab\Product;

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
            '\RainLab\Product\Components\Product' => 'product'
        ];
    }
}