<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

/** Routes for dashboard */
Route::get('/admin/dashboard', 'admin\HomeController@index');

/** Routes for pages */
Route::get('/admin/pages', 'admin\PageController@index');
Route::post('/admin/pages/store', 'admin\PageController@store');
Route::delete('/api/pages/destroy/{id}', 'admin\PageController@api_destroy');
Route::get('/api/page_details/{id}', 'admin\PageController@api_page');
Route::get('/admin/pages/list', 'admin\PageController@api_list');

/** Routes for banners */
Route::get('/admin/banners', 'admin\BannerController@index');
Route::post('/admin/banners/store', 'admin\BannerController@store');
Route::get('/admin/banners/list', 'admin\BannerController@api_list');
Route::delete('/api/banners/destroy/{id}', 'admin\BannerController@api_destroy');
Route::get('/api/banner_details/{id}', 'admin\BannerController@api_banner');

/** Routes for categories */
Route::get('/admin/categories', 'admin\CategoryController@index');
Route::post('/admin/categories/store', 'admin\CategoryController@store');
Route::get('/admin/categories/list', 'admin\CategoryController@api_list');
Route::delete('/api/categories/destroy/{id}', 'admin\CategoryController@api_destroy');
Route::get('/api/category_details/{id}', 'admin\CategoryController@api_category');

/** Routes for Navigation */
Route::get('/admin/navigation', 'admin\NavigationController@index');
Route::post('/admin/navigation/store', 'admin\NavigationController@store');
Route::get('/admin/navigation/list', 'admin\NavigationController@api_list');
Route::delete('/api/navigation/destroy/{id}', 'admin\NavigationController@api_destroy');
Route::get('/api/navigation_details/{id}', 'admin\NavigationController@api_navigation');