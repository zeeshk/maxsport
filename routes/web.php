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

/* Route::get('/', function () {
    return view('welcome');
}); */

//Login
Route::get('/','Auth\loginController@login_index');

//Register
Route::get('register','Auth\registerMerchantController@register_index');
Route::get('register/{id}/{fcmid}','Auth\registerMerchantController@register_merchant');
Route::post('registerApi','Auth\registerMerchantController@register_merchant_post');
Route::post('registerApis','Auth\registerMerchantController@register_merchant_post');
Route::post('api/register','Auth\registerMerchantController@register_merchant_post');