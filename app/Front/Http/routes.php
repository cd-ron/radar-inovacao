<?php

Route::get('/',                                 ['as' => 'home',				'uses' => 'FrontController@home']);
Route::get('/anunciar',                         ['as' => 'register',		    'uses' => 'FrontController@register']);
Route::post('/save-client',                     ['as' => 'client.store',		'uses' => 'FrontController@clientStore']);
Route::get('/pagamento/{client_id}',            [ 'as' => 'payment',		    'uses' => 'FrontController@payment']);
Route::post('/pagamento-salvar/{client_id}',    [ 'as' => 'payment.store',		'uses' => 'FrontController@paymentSave']);

Route::any('/pagseguro-redirect',               ['as' => 'pagseguro.redirect',  'uses' => 'FrontController@pagseguroRedirect']);
Route::any('/pagseguro-notification',           ['as' => 'pagseguro.notification',  'uses' => 'FrontController@pagseguroNotification']);

