<?php

namespace Cms\Modules\Contact\Providers;

use Cms\Modules\Core\Providers\CmsRoutingProvider;

class ContactRoutingProvider extends CmsRoutingProvider
{
    protected $namespace = 'Cms\Modules\Contact\Http\Controllers';

    /**
     * @return string
     */
    protected function getFrontendRoute()
    {
        return __DIR__.'/../Http/routes-frontend.php';
    }

    /**
     * @return string
     */
    protected function getBackendRoute()
    {
        return __DIR__.'/../Http/routes-backend.php';
    }

    /**
     * @return string
     */
    protected function getApiRoute()
    {
        return __DIR__.'/../Http/routes-api.php';
    }

    public function boot()
    {
        parent::boot();
    }
}
