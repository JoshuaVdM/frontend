<?php namespace INTEGRATION\Frontend;

use Backend;
use System\Classes\PluginBase;

/**
 * frontend Plugin Information File
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
            'name'        => 'frontend',
            'description' => 'Main frontend plugin, will create models, tables, .. all basics for the frontend to work',
            'author'      => 'INTEGRATION team',
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
        //
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
            'INTEGRATION\Frontend\Components\MyComponent' => 'myComponent',
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
            'integration.frontend.some_permission' => [
                'tab' => 'frontend',
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
        return []; // Remove this line to activate

        return [
            'frontend' => [
                'label'       => 'frontend',
                'url'         => Backend::url('integration/frontend/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['integration.frontend.*'],
                'order'       => 500,
            ],
        ];
    }
}
