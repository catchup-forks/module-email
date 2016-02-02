<?php

use Illuminate\Routing\Router;

$router->group(['prefix' => config('cms.contact.config.route', 'contact')], function (Router $router) {
    $router->post('/', ['uses' => 'PagesController@postForm']);
    $router->get('/', ['as' => 'pxcms.contact.index', 'uses' => 'PagesController@getForm']);
});
