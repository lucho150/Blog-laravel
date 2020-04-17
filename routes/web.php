<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'admin'], function () {

    //rutas users
    Route::get('users', ['uses' =>  'UsersController@index', 'as' => 'admin.users.index']);
    Route::get('users/create', ['uses' =>  'UsersController@create', 'as' => 'admin.users.create']);
    Route::post('users', ['uses' =>  'UsersController@store', 'as' => 'admin.users.store']);
    Route::get('users/{id}/destroy', ['uses' => 'UsersController@destroy', 'as' => 'admin.users.destroy']);
    Route::get('/users/{id}/edit', ['uses' => 'UsersController@edit', 'as' => 'admin.users.edit']);
    Route::put('/users/{id}/update', ['uses' => 'UsersController@update', 'as' => 'admin.users.update']);
    //rutas categories

    Route::get('categories/create', ['uses' => 'CategoriesController@create', 'as' => 'admin.categories.create']);
    Route::post('categories', ['uses' => 'CategoriesController@store', 'as' => 'admin.categories.store']);
    Route::get('categories', ['uses' => 'CategoriesController@index', 'as' => 'admin.categories.index']);
    Route::get('categories/{id}/destroy', ['uses' => 'CategoriesController@destroy', 'as' => 'admin.categories.destroy']);
    Route::get('categories/{id}/edit', ['uses' => 'CategoriesController@edit', 'as' => 'admin.categories.edit']);
    Route::put('categories/{id}/update', ['uses' => 'CategoriesController@update', 'as' => 'admin.categories.update']);


    //rutas tags    

    Route::get('tags', ['uses' =>  'TagsController@index', 'as' => 'admin.tags.index']);
    Route::get('tags/create', ['uses' =>  'TagsController@create', 'as' => 'admin.tags.create']);
    Route::post('tags', ['uses' =>  'TagsController@store', 'as' => 'admin.tags.store']);
    Route::get('tags/{id}/destroy', ['uses' => 'TagsController@destroy', 'as' => 'admin.tags.delete']); 
    Route::get('tags/{id}/edit', ['uses' => 'TagsController@edit', 'as' => 'admin.tags.edit']);
    Route::put('tags/{id}/update', ['uses' => 'TagsController@update', 'as' => 'admin.tags.update']);
    
    //rutas articles

 

    Route::get('articles/create', ['uses' =>  'ArticlesController@create', 'as' => 'admin.articles.create']);
    Route::post('articles/store', ['uses' =>  'ArticlesController@store', 'as' => 'admin.articles.store']);    



});

