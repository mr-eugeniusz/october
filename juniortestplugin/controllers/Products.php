<?php namespace IvanovIvan\JuniorTestPlugin\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use \IvanovIvan\JuniorTestPlugin\Models\Product;

/**
 * Products Back-end Controller
 */
class Products extends Controller
{
    /**
     * @var array Behaviors that are implemented by this controller.
     */
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.RelationController',
    ];

    /**
     * @var string Configuration file for the `FormController` behavior.
     */
    public $formConfig = 'config_form.yaml';

    /**
     * @var string Configuration file for the `ListController` behavior.
     */
    public $listConfig = 'config_list.yaml';

    public $relationConfig = 'config_relation.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('IvanovIvan.JuniorTestPlugin', 'juniortestplugin', 'products');
    }

    public function apiItems () {
        $category = input('category');
        $products = Product::where('category_id', $category)
            ->with('category')
            ->get();

        return $products;
    }
}
