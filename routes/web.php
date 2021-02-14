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

//page page home
Route::get('/', 'PageController@home')->name('home');
Route::get('/about', 'PageController@about');

//for page catalog only
Route::get('/catalog','StocksController@index');
Route::get('/catalog/detail/{stock}','StocksController@show');

//for cart
Route::group(['middleware' => 'verified'],function(){   

    Route::delete('/carts/{cart}/','DeleteController@cartDelete');
    Route::get('cart/','CartsController@show');
    Route::post('/carts/{stock}','StoreController@addCart');
    Route::get('/carts/payment','BuyingController@payment');
    
});

//for Profile
Route::get('profile/','UsersController@show');

//for routes verification email
Auth::routes();

//for verification email
Auth::routes(['verify' => true]);

//for admin page
Route::group(['middleware' => ['verified','role:1']],function(){

    Route::get('admin/','PageController@dashboard');
    Route::get('/admin/users','AdminController@show');
    Route::get('/admin/stocks','AdminController@stocks');
    Route::get('/admin/orders','AdminController@orders');
    Route::get('/stock/store','AdminController@view');

    //for find function
    Route::get('/admin/stock','FindController@stock');
    Route::get('/admin/user','FindController@user');
    Route::get('/admin/order','FindController@order');

    //------------------------------------//
    Route::delete('/order/{order}/','DeleteController@cancelOrder');
    
    Route::post('/stock/add','StoreController@addStock');
    
    Route::delete('/stock/{stock}/','DeleteController@deleteStock');
    
    Route::put('/stock/{stock}/','UpdateController@updateStock');
    
    Route::put('/user/{user}/','UpdateController@updateRole');
    
    Route::delete('/user/{user}/','DeleteController@deleteUser');

});
