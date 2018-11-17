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

Route::POST('cancel-request','RequestStoreController@cancelRequest');

Route::get('{name}/products','OwnerProductController@index');

Route::resource('owner-products','OwnerProductController');

Route::get('/checkout-detail','TransactionController@checkoutDetail');

Route::get('/upload-payment','TransactionController@uploadPayment');

Route::POST('confirm-payment','TransactionController@confirmPayment');

Route::get('buy/{name}','LandingPageController@buyProduct');

Route::POST('carts','CartController@addToCart');

Route::get('carts','CartController@index');

Route::POST('/update-quantity','CartController@toUpdateQuantity');

Route::get('checkout','CheckoutController@index');

Route::get("transactions",'TransactionController@index');

Route::get("transactions/{id}/show",'TransactionController@show');

Route::resource('user-types','UserTypeController');

Route::resource('user-status','UserStatusController');

Route::resource('user-profile','UserProfileController');

Route::resource('status-transactions','StatusTransactionController');

Route::POST('get-cities','RajaOngkirController@getCities');

Route::POST('get-subdistricts','RajaOngkirController@getSubdistricts');

Route::POST('estimate-cost','RajaOngkirController@estimateCost');

Route::get('/transactions','TransactionController@indexAdmin');

Route::get('transactions/{id}','TransactionController@detailTransaction');
