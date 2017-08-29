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

Route::get('/','SessionController@create')->name('login');
Route::post('/','SessionController@store');

Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');
Route::get('/view-users','RegistrationController@show')->name('users');
Route::delete('/view-users/{user}','RegistrationController@delete');
Route::get('/view-users/{user}','RegistrationController@edit');
Route::patch('/view-users/{user}','RegistrationController@update');

Route::get('/Carpenter','CarpenterController@create');
Route::post('/Carpenter','CarpenterController@store');
Route::get('/view-carpenter','CarpenterController@show')->name('workers');
Route::delete('/view-carpenter/{user}','CarpenterController@delete');
Route::get('/view-carpenter/{user}','CarpenterController@edit');
Route::patch('/view-carpenter/{user}','CarpenterController@update');
Route::post('/view-carpent','CarpenterController@view');

Route::get('/client-registration','ClientController@create');
Route::post('/client-registration','ClientController@store');
Route::get('/view-client','ClientController@show')->name('client');
Route::get('/view-client/{client}','ClientController@edit');
Route::patch('/view-client/{client}','ClientController@update');
Route::delete('/view-client/{client}','ClientController@delete');


Route::get('/semi-finished-1','OrderController@semifinished1')->name('s1');
Route::get('/semi-finished-2','OrderController@semifinished2')->name('s2');
Route::get('/client-order','OrderController@create');
Route::get('/client-order-laminate','OrderController@showLam');
Route::post('/client-order-laminate','OrderController@lamstore');
Route::post('/client-order','OrderController@store');
Route::get('/in-house','OrderController@increate');
Route::get('/in-house','OrderController@inshow');
Route::get('/in-house-laminate','OrderController@laminshow');
Route::post('/in-house','OrderController@instore');
Route::post('/in-house-laminate','OrderController@laminstore');
Route::get('/client-order','OrderController@show');
Route::get('/order-track','OrderController@ordershow');
Route::get('/history','OrderController@view');
Route::get('/history/{order}','OrderController@viewhistory');
Route::delete('/client-order{order}','OrderController@delete');
Route::get('/view-client-order','OrderController@showall')->name('Request');
Route::get('/view-client-order-laminate','OrderController@lamshowall')->name('laminate');
Route::get('/view-inhouse','OrderController@inshowall')->name('show');
Route::get('/view-inhouse-laminate','OrderController@laminshowall');
Route::get('/show_order/{order}&&{id}&&{admin}&&{carps}&&{sprays}&&{ups}','OrderController@showorder');
Route::get('/show_order_laminate/{order}&&{id}&&{admin}&&{carps}','OrderController@lamshoworder');
Route::get('/show-inhouse/{order}&&{id}&&{admin}&&{carps}','OrderController@inshoworder');
Route::get('/show-laminate/{order}&&{id}&&{admin}&&{carps}','OrderController@laminshoworder');
Route::patch('/show-inhouse/{order}&&{id}&&{admin}&&{carps}','OrderController@patch');
Route::patch('/show-laminate/{order}&&{id}&&{admin}&&{carps}','OrderController@lampatch');
Route::patch('/show_order/{order}&&{id}&&{admin}&&{carps}&&{sprays}&&{ups}','OrderController@update');
Route::patch('/show_order_laminate/{order}&&{id}&&{admin}&&{carps}','OrderController@lamupdate');



Route::get('/dashboard','HomeController@index')->name('home');
Route::post('/search_result','HomeController@search');
Route::get('/search','HomeController@show');
//Route::get('/search_result','HomeController@result');

Route::get('/add-item','DesignController@itemcreate');
Route::post('/add-item','DesignController@itemstore');
Route::get('/view-item','DesignController@itemshow');
Route::delete('/view-item/{item}','DesignController@itemdelete');
Route::get('/view-item/{item}','DesignController@edit');
Route::patch('/view-item/{item}','DesignController@itemupdate');

Route::get('/add-design','DesignController@create');
Route::post('/add-design','DesignController@store');
Route::get('/view-design','DesignController@show');
Route::delete('/view-design/{design}','DesignController@delete');
Route::patch('/view-design/{item}','DesignController@update');

Route::get('/stock','StockController@index')->name('stock');
Route::post('/stock','StockController@store');
Route::get('/sale/{stock}','StockController@makesale');
Route::patch('/sale/{stock}','StockController@patch');
Route::get('/stock_inventory/{stock}','StockController@show');
Route::patch('/stock_inventory/{stock}','StockController@update');
Route::get('/stock_history','StockController@showstock');

Route::get('/sales_history','SalesController@show');

Route::get('/logout','SessionController@destroy')->name('logout');

