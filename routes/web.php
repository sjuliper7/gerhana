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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

Route::resource('status-products','StatusProductController');

Route::resource('category-products','CategoryProductController');

Route::resource('products','ProductController');

Route::resource('ref-banks','RefBankController');

Route::get('/', 'LandingPageController@index')->name('landing-page');

Route::resource('stores','StoreController');

Route::get('/my-store','StoreController@myStore')->name('my-store');

Route::resource('status-stores','StatusStoreController');

Route::resource('request-stores','RequestStoreController');

Route::get('{name}/products','OwnerProductController@index');

Route::resource('owner-products','OwnerProductController');

Route::get('/checkout-detail','TransactionController@checkoutDetail');

Route::get('/upload-payment','TransactionController@uploadPayment');

Route::get('/confirm-payment','TransactionController@confirmPayment');

Route::get('buy/{name}','LandingPageController@buyProduct');

Route::POST('carts','CartController@addToCart');

Route::get('carts','CartController@index');

Route::POST('/update-quantity','CartController@toUpdateQuantity');
