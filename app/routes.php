<?php

Route::get('/', ['uses' => 'ProductController@all', 'as' => 'home']);
Route::get('/product/{slug}', ['uses' => 'ProductController@single', 'as' => 'product.single']);
Route::get('category/{slug}', ['uses' => 'CategoryController@single', 'as' => 'category.single']);

Route::group(['prefix' => 'user'], function() {
	Route::post('/login', ['uses' => 'UserController@login', 'as' => 'user.login']);
	Route::post('/register', ['uses' => 'UserController@register', 'as' => 'user.register']);
	Route::get('/logout', ['uses' => 'UserController@logout', 'as' => 'user.logout']);
});