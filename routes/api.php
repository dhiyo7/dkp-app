<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', 'Api\CrudController@index')->name('test');
Route::post('/test', 'Api\CrudController@store')->name('test.post');
Route::put('/test/{id}', 'Api\CrudController@update')->name('test.put');
Route::delete('/{id}/test', 'Api\CrudController@update')->name('test.delete');
