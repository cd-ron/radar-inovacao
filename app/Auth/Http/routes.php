<?php

//FaceBook
Route::get('facebook',          ['as' => 'facebook.login',       'uses' => 'AuthController@redirectToProviderFacebook']);
Route::get('facebook/callback', ['as' => 'facebook.callbak',     'uses' => 'AuthController@handleProviderCallbackFacebook']);

//Google
Route::get('google',          ['as' => 'google.login',       'uses' => 'AuthController@redirectToProviderGoogle']);
Route::get('google/callback', ['as' => 'google.callbak',     'uses' => 'AuthController@handleProviderCallbackGoogle']);

//Linkedin
Route::get('linkedin',          ['as' => 'linkedin.login',       'uses' => 'AuthController@redirectToProviderLinkedin']);
Route::get('linkedin/callback', ['as' => 'linkedin.callbak',     'uses' => 'AuthController@handleProviderCallbackLinkedin']);

Route::get('login',     ['as' => 'login',       'uses' => 'AuthController@showLogin']);
Route::post('login',    ['as' => 'login.post',  'uses' => 'AuthController@doLogin']);
Route::get('logout',    ['as' => 'logout',      'uses' => 'AuthController@doLogout']);

Route::get('register',     ['as' => 'register',       'uses' => 'AuthController@showregister']);
Route::post('register',     ['as' => 'register.post',       'uses' => 'AuthController@doRegister']);

Route::post('verify-email',    ['as' => 'verify.email',      'uses' => 'AuthController@verifyEmail']);

Route::get('token/{token}',     ['as' => 'token',       'uses' => 'AuthController@token']);