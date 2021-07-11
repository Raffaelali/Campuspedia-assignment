<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/all', 'HomeController@all')->name('all');

Route::get('/sign', 'SignController@index')->name('Sign');

// halaman khusus para chef
Route::middleware('auth')->group(function () {
    Route::get('/recipes', 'RecipeController@index')->name('Recipes.index');
    Route::get('/recipes/make', 'RecipeController@create')->name('Recipes.create');
    Route::post('/recipes', 'RecipeController@store')->name('Recipes.store');
    Route::post('/recipes/search', 'RecipeController@search')->name('Recipes.search');
    Route::delete('/recipes/{recipe}', 'RecipeController@destroy')->name('Recipes.delete');
    Route::get('/recipes/{recipe}/edit', 'RecipeController@edit')->name('Recipes.edit');
    Route::patch('/recipes/{recipe}', 'RecipeController@update')->name('Recipes.update');
    Route::get('/recipes/{recipe}', 'RecipeController@show')->name('Recipes.show');
});
