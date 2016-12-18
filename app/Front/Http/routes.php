<?php

Route::get('/', ['as' => 'home', 'uses' => 'FrontController@home']);
Route::get('/form', ['as' => 'form', 'uses' => 'FrontController@form']);
