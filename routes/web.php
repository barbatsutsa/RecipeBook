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
Route::get('/category/{cat_id}', 'RecipeController@showCategory')
    ->where('cat_id', '\d+')
    ->name('category');
Route::get('/recipes/{id}', 'RecipeController@show')
    ->where('id', '\d+')
    ->name('recipe');
Route::get('/recipes/create', 'RecipeController@create')
    ->name('recipes.create');
Route::post('/recipes/store', 'RecipeController@store')
    ->name('recipes.store');
Route::get('/ingredients/create/{recipe}', 'IngredientController@create')
    ->name('ingredients.create');
Route::post('/ingredients/store', 'IngredientController@store')
    ->name('ingredients.store');
//Route::get('/category/{category_id}', 'RecipeController@showCategory')
//    ->name('recipes.category');

