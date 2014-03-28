<?php

/**
 * Rutas publicas
 */
Route::get('/', array(
    'as'   => 'home',
    'uses' => 'HomeController@home',
));

Route::get('account/login', array(
    'as'   => 'login',
    'uses' => 'AccountController@login',
));

Route::get('account/logout', array(
    'as'   => 'logout',
    'uses' => 'AccountController@logout',
));

Route::get('account/register', array(
    'as'   => 'register',
    'uses' => 'AccountController@register',
));

/**
 * Rutas para productos
 */

Route::get('products', array(
    'as'   => 'products',
    'uses' => 'ProductsController@home',
));

Route::get('products/detail/{id}', array(
    'as'   => 'products.detail',
    'uses' => 'ProductsController@detail',
));

Route::get('products/add/{id}', array(
    'as'   => 'products.add',
    'uses' => 'ProductsController@add',
));

/**
 * Rutas con filtro CSRF
 */
Route::group(array('before' => 'csrf'), function (){
    Route::post('account/login', 'AccountController@doLogin');
    Route::post('account/register', 'AccountController@doRegister');
});