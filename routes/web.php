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

Route::get('/', 'IndexController@index');
Auth::routes();
Route::get('/userpanel', 'admin\UserController@userPanel')->name('userpanel');
Route::group(['middleware'=>['auth','UserLevel']],function(){
  Route::get('/home', 'HomeController@index')->name('home');
});
Route::resource('cat', 'CategoryController');
Route::resource('pro', 'ProductController');



Route::group(['namespace'=>'admin','middleware'=>['auth','UserLevel'],'prefix'=>'/admin'],function(){
  Route::resource('/product', 'ProductController');
  Route::resource('/role', 'RoleController');
  Route::resource('/user', 'UserController');
  Route::resource('/permission', 'PermissionController');
  Route::resource('/category', 'CategoryController');
  Route::resource('/producer', 'ProducerController');
  Route::resource('/slider', 'SliderController');
  Route::resource('/filter', 'FilterController');
  Route::resource('/sliderparent', 'SliderparentController');
});


Route::resource('cat', 'CategoryController');
Route::resource('pro', 'ProductController');
