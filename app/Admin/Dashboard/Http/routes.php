<?php


Route::get('/', ['as' =>'admin', 'middleware' => 'auth', 'uses' => 'DashboardController@index']);
