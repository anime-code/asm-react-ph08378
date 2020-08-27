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


Route::get('admin/login', 'LoginController@login')->name('login');

Route::post('admin/login', 'LoginController@postLogin');
Route::get('admin/logout', 'LoginController@logout')->name('logout');

Route::group(['prefix' => 'admin', 'middleware' => 'adminLogin'], function () {


    Route::get('dashboard', 'DashboardController@index')->name('admin.index');
    Route::resource('categories', 'CategoryController')->except('destroy');

    Route::get('categories/{id}/destroy', 'CategoryController@destroy')->name('categories.destroy');
    Route::resource('products', 'ProductController')->except('destroy');

    Route::get('products/{id}/destroy', 'ProductController@destroy')->name('products.destroy');
    Route::resource('product_galleries', 'ProductGalleryController')->except('destroy', 'create');
    Route::get('product_galleries/{id}/create', 'ProductGalleryController@createDetail')->name('product_galleries.create.detail');
    Route::get('product_galleries/{id}/{product}/destroy', 'ProductGalleryController@destroy')->name('product_galleries.destroy');
    Route::resource('users', 'UserController')->except('destroy');
    Route::get('users/{id}/destroy', 'UserController@destroy')->name('users.destroy');
    Route::resource('invoices', 'InvoiceController')->except('destroy');
    Route::get('invoices/{id}/destroy', 'InvoiceController@destroy')->name('invoices.destroy');
});


//Front-end
Route::get('/', 'PageController@index')->name('page.index');
Route::get('shop-grid.html', 'PageController@shopPage')->name('page.shop');
Route::get('single-product/{id}', 'PageController@productPage')->name('page.product');
Route::get('category/{id}', 'PageController@showProductByCate')->name('page.product.by.cate');
Route::get('contact', 'PageController@contact')->name('page.contact');
Route::post('mail', 'EmailController@sendEmail')->name('page.email');


