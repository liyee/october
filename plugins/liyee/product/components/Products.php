<?php
namespace Liyee\Product\Controllers;

class Products extends \Backend\Classes\Controller {

    public function componentDetails(){
        return [
            'name' => 'Products',
            'description' => 'Displays a collection of product posts.'
        ];
    }
    
    public function products(){
        return ['First Product', 'Second Product', 'Third Product'];   
    }
}
?>