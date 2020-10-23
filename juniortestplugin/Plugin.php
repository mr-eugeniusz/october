<?php namespace IvanovIvan\JuniorTestPlugin;

use Backend;
use System\Classes\PluginBase;

/**
 * JuniorTestPlugin Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'JuniorTestPlugin',
            'description' => 'No description provided yet...',
            'author'      => 'IvanovIvan',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'IvanovIvan\JuniorTestPlugin\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'ivanovivan.juniortestplugin.some_permission' => [
                'tab' => 'JuniorTestPlugin',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'juniortestplugin' => [
                'label'       => 'JuniorTestPlugin',
                'url'         => Backend::url('ivanovivan/juniortestplugin/Products'),
                'icon'        => 'icon-leaf',
                'permissions' => ['ivanovivan.juniortestplugin.*'],
                'order'       => 500,
                'sideMenu' => [
                    'products' => [
                        'label'       => 'Товары',
                        'icon'        => 'icon-list-alt',
                        'url'         => \Backend::url('ivanovivan/juniortestplugin/Products'),
                    ],
                    'categories' => [
                        'label'       => 'Разделы',
                        'icon'        => 'icon-list-alt',
                        'url'         => \Backend::url('ivanovivan/juniortestplugin/Categories'),
                    ],
                ]
            ],
        ];
    }
}
