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

Route::get('account/register', array(
    'as'   => 'register',
    'uses' => 'AccountController@register',
));

/**
 * Rutas con filtro CSRF
 */
Route::group(array('before' => 'csrf'), function (){
    Route::post('account/login', 'AccountController@doLogin');
    Route::post('account/register', 'AccountController@doRegister');
});