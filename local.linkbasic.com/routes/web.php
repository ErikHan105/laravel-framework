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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('');

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::match(['get','post'], '/news', ['as' => 'news', 'uses' => 'HomeController@news']);
Route::match(['get','post'], '/aboutus', ['as' => 'about', 'uses' => 'HomeController@about']);
Route::match(['get','post'], '/products', ['as' => 'products', 'uses' => 'HomeController@products']);
Route::match(['get','post'], '/support', ['as' => 'support', 'uses' => 'HomeController@support']);
Route::match(['get','post'], '/custom', ['as' => 'custom', 'uses' => 'HomeController@custom']);
Route::match(['get','post'], '/contact', ['as' => 'contact', 'uses' => 'HomeController@contact']);
Route::match(['get', 'post'], '/sendemail', ['as' => 'sendemail', 'uses' => 'SendEmailController@send']);
Route::match(['get', 'post'], '/{id}/detail', ['as' => 'product.detail', 'uses' => 'HomeController@product_detail']);
Route::match(['get', 'post'], '/news/{id}', ['as' => 'news.detail', 'uses' => 'HomeController@news_detail']);

Route::group(['middleware' => 'guest'], function () {
	Route::match(['get'], 'admin/login', ['as' => 'admin.login', 'uses' => 'Admin\LoginController@showLoginForm']);
	Route::match(['post'], 'admin/login', ['as' => 'admin.login', 'uses' => 'Admin\LoginController@login']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('/download/{id}', ['as' => 'download', 'uses' => 'HomeController@download']);
});

Route::group(['middleware' => 'is_admin'], function () {
	Route::match(['get', 'post'], 'admin/add/{id?}', ['as' => 'admin.add', 'uses' => 'Admin\ProductController@add']);
	Route::match(['get', 'post'], 'admin/addnews/{id?}', ['as' => 'admin.addnews', 'uses' => 'Admin\NewsController@add_news']);
	Route::match(['get', 'post'], 'admin/productlist', ['as' => 'admin.productlist', 'uses' => 'Admin\ProductController@productlist']);
	Route::match(['get', 'post'], 'admin/newslist', ['as' => 'admin.newslist', 'uses' => 'Admin\NewsController@newslist']);
	Route::match(['get', 'post'], 'admin/productlist/delete/{id}', ['as' => 'admin.product.delete', 'uses' => 'Admin\ProductController@product_delete']);
	Route::match(['get', 'post'], 'admin/newslist/delete/{id}', ['as' => 'admin.news.delete', 'uses' => 'Admin\NewsController@news_delete']);
	Route::match(['get', 'post'], 'admin/companyinfo', ['as' => 'admin.companyinfo', 'uses' => 'Admin\NewsController@company_info']);
	Route::match(['get', 'post'], 'admin/slideimage', ['as' => 'admin.slideimage', 'uses' => 'Admin\ProductController@slide_image']);
});



