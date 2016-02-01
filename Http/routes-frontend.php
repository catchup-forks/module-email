<?php

use Illuminate\Routing\Router;

$router->group(['prefix' => 'contact'], function (Router $router) {
    $router->get('/', ['as' => 'pxcms.contact.index', 'uses' => 'PagesController@getIndex']);
});
