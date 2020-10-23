<?php namespace IvanovIvan\JuniorTestPlugin\FormWidgets;

use Backend\Classes\FormWidgetBase;

/**
 * ProductsSelector Form Widget
 */
class ProductsSelector extends FormWidgetBase
{
    /**
     * @inheritDoc
     */
    protected $defaultAlias = 'ivanovivan_juniortestplugin_products_selector';

    /**
     * @inheritDoc
     */
    public function init()
    {
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        $this->prepareVars();
        return $this->makePartial('productsselector');
    }

    /**
     * Prepares the form widget view data
     */
    public function prepareVars()
    {
        $this->vars['name'] = $this->formField->getName();
        $this->vars['value'] = $this->getLoadValue();
        $this->vars['model'] = $this->model;
    }

    /**
     * @inheritDoc
     */
    public function loadAssets()
    {
        $this->addCss('css/productsselector.css', 'IvanovIvan.JuniorTestPlugin');
        $this->addJs('js/productsselector.js', 'IvanovIvan.JuniorTestPlugin');
    }

    /**
     * @inheritDoc
     */
    public function getSaveValue($value)
    {
        return $value;
    }
}
