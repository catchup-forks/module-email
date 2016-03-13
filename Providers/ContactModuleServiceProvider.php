<?php

namespace Cms\Modules\Contact\Providers;

use Cms\Modules\Core\Providers\BaseModuleProvider;

class ContactModuleServiceProvider extends BaseModuleProvider
{
    /**
     * Register the defined middleware.
     *
     * @var array
     */
    protected $middleware = [
        'Contact' => [
        ],
    ];

    /**
     * The commands to register.
     *
     * @var array
     */
    protected $commands = [
        'Contact' => [
        ],
    ];

    /**
     * Register view composers.
     *
     * @var array
     */
    protected $composers = [
        'Contact' => [
        ],
    ];

    /**
     * Register repository bindings to the IoC.
     *
     * @var array
     */
    protected $bindings = [
        'Cms\Modules\Contact\Repositories\Mail' => ['RepositoryInterface' => 'EloquentRepository'],
    ];

    /**
     * Register Auth related stuffs.
     */
    public function register()
    {
        parent::register();
    }
}
