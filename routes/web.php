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

Route::get('/eccommerce', 'EccommerceTemplate@index');

// Route::get('/home', function () {
//     return view('home');
// });

