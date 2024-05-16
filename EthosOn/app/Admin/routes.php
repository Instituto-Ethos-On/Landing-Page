<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('cursos_prods', Cursos_prod_Controller::class);
    $router->resource('review_models', Review_Controller::class);
    $router->resource('parcelas_models', Parcelas_controller::class);
    $router->resource('whats-app-link_models', whatsAppLink_controller::class);
    $router->resource('desconto_model', Desconto_controller::class);
});
