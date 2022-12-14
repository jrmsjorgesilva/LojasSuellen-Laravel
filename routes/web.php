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

// LOJAS SUELLEN ROUTES

Route::get('/', 'Teste@index');

Route::get('/form', 'Teste@form');

Route::get('/shop', 'Teste@shop');

// SUITECRED HOTSITE ROUTES

Route::get('/suitecred', 'Suitecred@index');

// ECCOMERCE TEMPLATE ROUTES

Route::get('/ecommerce', 'EccommerceTemplate@index');

Route::get('/detail', 'EccommerceTemplate@detail_page');

Route::get('/contact', 'EccommerceTemplate@contact_page');

Route::get('/checkout', 'EccommerceTemplate@checkout_page');

Route::get('/cart', 'EccommerceTemplate@cart_page');

Route::get('/shop', 'EccommerceTemplate@shop_page');

// EVENT CONNECT ROUTES

Route::get('/eventconnect', "EventConnect@index")->name('/eventconnect.index');

Route::get('/eventconnect/create', "EventConnect@create");

Route::get('/eventconnect/contact', "EventConnect@contact");

Route::post('/eventconnect', "EventConnect@store");

// Route::get('/home', function () {
//     return view('home');
// });

// FINTORCH ROUTES

Route::get('/fintorch', "FintorchController@index");

