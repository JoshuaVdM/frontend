<?php namespace Integration\API;

use Backend;
use System\Classes\PluginBase;

/**
 * API Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * @var array
     */
    public $require = [
        'Integration.Frontend',
    ];
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'SOAP',
            'description' => 'API Extension for other modules to create content for the frontend to display',
            'author'      => 'Integration team',
            'icon'        => 'icon-paper-plane-o'
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
        \App::register('\Integration\API\Providers\VisitorServiceProvider');

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
            'Integration\API\Components\MyComponent' => 'myComponent',
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
            'integration.api.some_permission' => [
                'tab' => 'API',
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
            'api' => [
                'label'       => 'API',
                'url'         => Backend::url('integration/api/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['integration.api.*'],
                'order'       => 500,
            ],
        ];
    }
}
