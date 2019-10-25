<?php namespace RainLab\Product\Components;

use Cms\Classes\ComponentBase;


class Product extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Product',
            'description' => 'Merchandise management and display.'
        ];
    }
    
}
?>