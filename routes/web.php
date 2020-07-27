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

Route::get('/', 'PagesController@index');
Route::get('/blog-details', 'PagesController@show');

Route::get('/login', 'Backend\AuthController@login')->name('login');
Route::post('/procees_login', 'Backend\AuthController@proccess_login');
Route::group(['prefix' => 'site', 'middleware' => 'auth' ,'namespace' => 'Backend'], function(){
    Route::get('/admin', 'DashboardController@index');

    // menu
    Route::get('/admin/menu', 'MenuController@index');
    Route::get('/admin/menu/create', 'MenuController@create');
    Route::post('/admin/menu', 'MenuController@store');
    Route::get('/admin/menu/edit/{id}', 'MenuController@edit');
    Route::put('/admin/menu/update/{id}', 'MenuController@update');
    Route::delete('/admin/menu/delete/{id}', 'MenuController@destroy');

    // client area
    Route::get('/admin/client', 'ClientController@index');
    Route::get('/admin/client/create', 'ClientController@create');
    Route::post('/admin/client', 'ClientController@store');
    Route::delete('/admin/client/delete/{id}', 'ClientController@destroy');

    // service 
    Route::get('/admin/service', 'ServiceController@index');
    Route::get('/admin/service/create', 'ServiceController@create');
    Route::post('/admin/service', 'ServiceController@store');
    Route::get('/admin/service/edit/{id}', 'ServiceController@edit');
    Route::put('/admin/service/update/{id}', 'ServiceController@update');
    Route::delete('/admin/service/delete/{id}', 'ServiceController@destroy');

    // Portfolio
    Route::get('/admin/portfolio', 'PortfolioController@index');
    Route::get('/admin/portfolio/create', 'PortfolioController@create');
    Route::post('/admin/portfolio', 'PortfolioController@store');
    Route::delete('/admin/portfolio/delete/{id}', 'PortfolioController@destroy');


    // setting
    Route::get('/admin/settings', 'SettingController@index');
    Route::put('/admin/settings/1', 'SettingController@update');


    // blog
    Route::get('admin/blog', 'BlogController@index');
    Route::get('admin/blog/create', 'BlogController@create');
    Route::post('admin/blog', 'BlogController@store');
    Route::get('admin/blog/edit/{id}', 'BlogController@edit');
    Route::put('admin/blog/update/{id}', 'BlogController@update');
    Route::delete('admin/blog/delete/{id}', 'BlogController@destroy');

    Route::get('/logout', 'AuthController@logout');
});
