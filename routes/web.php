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

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('movie', 'MovieController');
Route::get('movie/destroy/{id}', ['as'=>'movie/destroy', 'uses'=>'MovieController@destroy']);
Route::post('movie/show', ['as'=>'movie/show', 'uses' => 'MovieController@show']);
Route::post('movie/update/{id}',['as'=>'movie/update','uses'=>'MovieController@update']);

Route::resource('userMovie', 'UserMovieController');
Route::get('userMovie/destroy/{id}', ['as'=>'userMovie/destroy', 'uses'=>'UserMovieController@destroy']);
Route::post('userMovie/show', ['as'=>'userMovie/show', 'uses' => 'UserMovieController@show']);
Route::post('userMovie/update/{id}',['as'=>'userMovie/update','uses'=>'UserMovieController@update']);

Route::resource('role', 'RoleController');
Route::get('role/destroy/{id}', ['as'=>'role/destroy', 'uses'=>'RoleController@destroy']);
Route::post('role/show', ['as'=>'role/show', 'uses' => 'RoleController@show']);
Route::post('role/update/{id}',['as'=>'role/update','uses'=>'RoleController@update']);

Route::resource('statuse', 'StatuseController');
Route::get('statuse/destroy/{id}', ['as'=>'statuse/destroy', 'uses'=>'StatuseController@destroy']);
Route::post('statuse/show', ['as'=>'statuse/show', 'uses' => 'StatuseController@show']);
Route::post('statuse/update/{id}',['as'=>'statuse/update','uses'=>'StatuseController@update']);

Route::resource('rental', 'RentalController');
Route::get('rental/destroy/{id}', ['as'=>'rental/destroy', 'uses'=>'RentalController@destroy']);
Route::post('rental/show', ['as'=>'rental/show', 'uses' => 'RentalController@show']);
Route::post('rental/update/{id}',['as'=>'rental/update','uses'=>'RentalController@update']);

Route::resource('categorie', 'CategorieController');
Route::get('categorie/destroy/{id}', ['as'=>'categorie/destroy', 'uses'=>'categorieController@destroy']);
Route::post('categorie/show', ['as'=>'categorie/show', 'uses' => 'categorieController@show']);
Route::post('categorie/update/{id}',['as'=>'categorie/update','uses'=>'categorieController@update']);

Route::resource('typeStatuse', 'TypeStatuseController');
Route::get('typeStatuse/destroy/{id}', ['as'=>'typeStatuse/destroy', 'uses'=>'typeStatuseController@destroy']);
Route::post('typeStatuse/show', ['as'=>'typeStatuse/show', 'uses' => 'typeStatuseController@show']);
Route::post('typeStatuse/update/{id}',['as'=>'typeStatuse/update','uses'=>'typeStatuseController@update']);