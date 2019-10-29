<?php namespace Liyee\Product\Controllers;

use BackendMenu;
use Flash;
use Lang;
use Backend\Classes\Controller;
use Liyee\Product\Models\Category;

class Categories extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.ReorderController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = ['liyee.product.access_categories'];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Liyee.Product', 'product', 'categories');
    }

    public function index_onDelete()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {

            foreach ($checkedIds as $categoryId) {
                if ((!$category = Category::find($categoryId))) {
                    continue;
                }

                $category->delete();
            }

            Flash::success(Lang::get('liyee.product::lang.category.delete_success'));
        }

        return $this->listRefresh();
    }
}
