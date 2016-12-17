<?php


Route::get('role/permission/{id}', ['uses' => 'RoleController@permission']);
Route::post('role/permission/{id}', ['uses' => 'RoleController@permissionSave']);
Route::resource('role', 'RoleController');


