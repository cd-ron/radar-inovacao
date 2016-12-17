<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Categories
Route::get('/getcategories', ['uses' => 'ApiController@getCategories']);

//Clients
Route::get('/getclients/{category_id}', ['uses' => 'ApiController@getClients']);
//Clients Detail
Route::get('/getclientdetail/{client_id}', ['uses' => 'ApiController@getClientDetail']);

//Events
Route::get('/getevents', ['uses' => 'ApiController@getEvents']);