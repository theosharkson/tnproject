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
})->name('site');

Route::get('/admin', function () {
    return view('admin');
})->name('dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('user-types', UserTypeController::class);
Route::resource('staffs', StaffController::class);
Route::resource('package-types', PackageTypeController::class);
// Route::resource('packages', PackageController::class);
Route::get('package-types/{packageType}/add-packages', 'PackageController@create')->name('add-packages');
Route::post('package-types/{packageType}/add-packages', 'PackageController@store')->name('packages.store');
Route::get('package-types/{packageType}/package/{package}/edit', 'PackageController@edit')->name('packages.edit');
Route::put('package-types/{packageType}/package/{package}/update', 'PackageController@update')->name('packages.update');
Route::delete('package/{package}/{packageType}', 'PackageController@destroy')->name('packages.destroy');

Route::resource('features', FeatureController::class);
Route::resource('extras', ExtraController::class);


Route::resource('portfolios', PortfolioController::class);
Route::get('portfolios/{portfolio}/add-items', 'PortfolioItemController@create')->name('add-portfolio-items');
Route::post('portfolios/{portfolio}/add-items', 'PortfolioItemController@store')->name('portfolio-items.store');
Route::get('portfolios/{portfolio}/package/{package}/edit', 'PortfolioItemController@edit')->name('portfolio-items.edit');
Route::put('portfolios/{portfolio}/package/{package}/update', 'PortfolioItemController@update')->name('portfolio-items.update');
Route::delete('portfolio-item/{portfolioItem}/{portfolio}', 'PortfolioItemController@destroy')->name('portfolio-items.destroy');







/**
 *
 * Site Routes
 *
 */
Route::get('/about', function () {
    return view('about');
})->name('site.about');

Route::get('/our-packages', 'PackageController@index')->name('site.packages');
Route::get('/video-packages', 'PackageController@videoPackages')->name('site.video-packages');
Route::get('/photo-packages', 'PackageController@photoPackages')->name('site.photo-packages');

Route::get('video-packages/{packageType}', 'PackageController@videoPackagesList')->name('site.video-packages-list');
Route::get('photo-packages/{packageType}', 'PackageController@photoPackagesList')->name('site.photo-packages-list');

Route::get('/portfolio', 'PortfolioController@selectType')->name('site.portfolio.select-type');
Route::get('/photo-albums', 'PortfolioController@photoAlbums')->name('site.photo-albums');
Route::get('/photo-albums/{portfolio}', 'PortfolioController@photoAlbumsShow')->name('site.photo-albums.show');
Route::get('/video-albums', 'PortfolioController@videoAlbums')->name('site.video-albums');


//==========================================================




Route::get('/uploads/product_images/{image}', function () { })->name('products.images.full');
Route::get('/uploads/product_images_large/{image}', function () { })->name('products.images.large');
Route::get('/uploads/product_images_thumb/{image}', function () { })->name('products.images.thumb');
Route::get('/uploads/product_images_raw/{image}', function () { })->name('products.images.raw');

Route::get('/uploads/package_images/{image}', function () { })->name('packages.images.full');
Route::get('/uploads/package_images_large/{image}', function () { })->name('packages.images.large');
Route::get('/uploads/package_images_thumb/{image}', function () { })->name('packages.images.thumb');
Route::get('/uploads/package_images_raw/{image}', function () { })->name('packages.images.raw');

Route::get('/uploads/package_type_images/{image}', function () { })->name('package-type.images.full');
Route::get('/uploads/package_type_images_large/{image}', function () { })->name('package-type.images.large');
Route::get('/uploads/package_type_images_thumb/{image}', function () { })->name('package-type.images.thumb');
Route::get('/uploads/package_type_images_raw/{image}', function () { })->name('package-type.images.raw');

Route::get('/uploads/user_images/{image}', function () { })->name('users.images.full');
Route::get('/uploads/user_images_large/{image}', function () { })->name('users.images.large');
Route::get('/uploads/user_images_thumb/{image}', function () { })->name('users.images.thumb');
Route::get('/uploads/user_images_raw/{image}', function () { })->name('users.images.raw');

Route::get('/uploads/extra_images/{image}', function () { })->name('extras.images.full');
Route::get('/uploads/extra_images_large/{image}', function () { })->name('extras.images.large');
Route::get('/uploads/extra_images_thumb/{image}', function () { })->name('extras.images.thumb');
Route::get('/uploads/extra_images_raw/{image}', function () { })->name('extras.images.raw');


Route::get('/uploads/portfolio_images/{image}', function () { })->name('portfolios.images.full');
Route::get('/uploads/portfolio_images_large/{image}', function () { })->name('portfolios.images.large');
Route::get('/uploads/portfolio_images_thumb/{image}', function () { })->name('portfolios.images.thumb');
Route::get('/uploads/portfolio_images_raw/{image}', function () { })->name('portfolios.images.raw');



Route::get('/uploads/portfolio_item_images/{image}', function () { })->name('portfolio-items.images.full');
Route::get('/uploads/portfolio_item_images_large/{image}', function () { })->name('portfolio-items.images.large');
Route::get('/uploads/portfolio_item_images_thumb/{image}', function () { })->name('portfolio-items.images.thumb');
Route::get('/uploads/portfolio_item_images_raw/{image}', function () { })->name('portfolio-items.images.raw');




