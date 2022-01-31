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

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/','welcome@showproduct')->name('welcome');

Route::get('/index','Admin\AdminController@index')->name('index');

//route user
Route::get('admin/user/index','Admin\UserController@index')->name('user.index');
Route::get('admin/user/edit/{id}','Admin\UserController@edit');
Route::post('admin/user/update/{id}','Admin\UserController@update');
Route::get('admin/user/delete/{id}','Admin\UserController@delete');
//-------------------------------------------------------------------------------------------------------





//route category
Route::get('admin/category/index','Admin\CategoryController@index')->name('category');
Route::get('admin/category/addcatrgory','Admin\CategoryController@addcatrgory')->name('addcatrgory');
Route::post('admin/category/create','Admin\CategoryController@create')->name('create');
Route::get('admin/category/edit/{id}','Admin\CategoryController@edit');
Route::post('admin/category/update/{id}','Admin\CategoryController@update');
Route::get('admin/category/delete/{id}','Admin\CategoryController@delete');
//-------------------------------------------------------------------------------------------------------




//route background
Route::get('admin/background/index','Admin\BackgroundController@index')->name('background.index');
Route::get('admin/background/add','Admin\BackgroundController@addbackground')->name('background.add');
Route::post('admin/background/create','Admin\BackgroundController@create')->name('background.c');
Route::get('admin/background/edit/{id}','Admin\BackgroundController@edit');
Route::post('admin/background/update/{id}','Admin\BackgroundController@update');
//-------------------------------------------------------------------------------------------------------





//route product
Route::get('admin/product/productform','Admin\ProductController@showproduct')->name('productform');
Route::get('admin/product/addproduct','Admin\ProductController@addproduct')->name('addproduct');
Route::post('admin/product/create','Admin\ProductController@create')->name('product.c');
Route::get('admin/product/edit/{id}','Admin\ProductController@edit');
Route::post('admin/product/update/{id}','Admin\ProductController@update');
Route::get('admin/product/delete/{id}','Admin\ProductController@delete');
//-------------------------------------------------------------------------------------------------------




//route Contents
Route::get('admin/contents/index','Admin\ContentsController@index')->name('contents.index');
Route::get('admin/contents/addcontents','Admin\ContentsController@addcontents')->name('contents.add');
Route::post('admin/contents/create','Admin\ContentsController@create')->name('contents.c');
Route::get('admin/contents/edit/{id}','Admin\ContentsController@edit');
Route::post('admin/contents/update/{id}','Admin\ContentsController@update');
Route::get('admin/contents/delete/{id}','Admin\ContentsController@delete');
//-------------------------------------------------------------------------------------------------------





//route Promotion
Route::get('admin/promotion/index','Admin\PromotionController@index')->name('promotion.index');
Route::get('admin/promotion/addpromotion','Admin\PromotionController@addpromotion')->name('promotion.add');
Route::post('admin/promotion/create','Admin\PromotionController@create')->name('promotion.c');
Route::get('admin/promotion/edit/{id}','Admin\PromotionController@edit');
Route::post('admin/promotion/update/{id}','Admin\PromotionController@update');
Route::get('admin/promotion/delete/{id}','Admin\PromotionController@delete');
//-------------------------------------------------------------------------------------------------------







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
