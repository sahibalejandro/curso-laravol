<?php
Route::get('/', array(
    'as'   => 'home',
    'uses' => 'HomeController@home',
));

Route::get('login', array(
    'as'   => 'login',
    'uses' => 'HomeController@login',
));

Route::post('login', array(
    'before' => 'csrf',
    'as'     => 'login',
    'uses'   => 'HomeController@doLogin',
));