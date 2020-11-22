<?php

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

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'RecipeController@index')
    ->name('index');
Route::get('/recipes/{id}', 'RecipeController@show')
    ->where('id', '\d+')
    ->name('recipe');
Route::get('/recipes/create', 'RecipeController@create')
    ->name('recipes.create');
Route::post('/recipes/store', 'RecipeController@store')
    ->name('recipes.store');
Route::get('/category/{category_id}', 'RecipeController@index')
    ->name('recipes.category');

Route::get('/social-auth/{provider}', 'Auth\SocialController@redirectToProvider')->name('auth.social');

Route::get('/social-auth/{provider}/callback', 'Auth\SocialController@handleProviderCallback')->name('auth.social.callback');

Route::get('/auth/vk', 'LoginController@loginVK')->name('vklogin');
Route::get('/auth/vk/response', 'LoginController@responseVK')->name('vkResponse');


