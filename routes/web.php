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
    return view('site');
});

Route::get('/admin', function () {
    return view('admin');
})->name('dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('user-types', UserTypeController::class);
Route::resource('staffs', StaffController::class);
Route::resource('products', ProductController::class);
Route::resource('packages', PackageController::class);
Route::resource('features', FeatureController::class);

/**
 *
 * Site Routes
 *
 */

Route::get('/our-packages', 'PackageController@index')->name('site.packages');




//==========================================================

Route::get('/uploads/product_images/{image}', function () { })->name('products.images.full');
Route::get('/uploads/product_images_large/{image}', function () { })->name('products.images.large');
Route::get('/uploads/product_images_thumb/{image}', function () { })->name('products.images.thumb');
Route::get('/uploads/product_images_raw/{image}', function () { })->name('products.images.raw');

Route::get('/uploads/package_images/{image}', function () { })->name('packages.images.full');
Route::get('/uploads/package_images_large/{image}', function () { })->name('packages.images.large');
Route::get('/uploads/package_images_thumb/{image}', function () { })->name('packages.images.thumb');
Route::get('/uploads/package_images_raw/{image}', function () { })->name('packages.images.raw');

Route::get('/uploads/user_images/{image}', function () { })->name('users.images.full');
Route::get('/uploads/user_images_large/{image}', function () { })->name('users.images.large');
Route::get('/uploads/user_images_thumb/{image}', function () { })->name('users.images.thumb');
Route::get('/uploads/user_images_raw/{image}', function () { })->name('users.images.raw');




