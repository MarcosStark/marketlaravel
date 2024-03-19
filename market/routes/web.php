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
Route::get('/', 'MainController@main')->name('site.index');
Route::get('/about', 'AboutController@about')->name('site.about');
Route::get('/contact', 'ContactController@contact')->name('site.contact');

Route::get('/login', function(){ return 'login';})->name('site.login');

Route::prefix('/app')->group(function(){
    Route::get('/clients', function(){ return 'clients';})->name('app.clients');
    Route::get('/suppliers', function(){ return 'suppliers';})->name('app.suppliers');
    Route::get('/products', function(){ return 'products';})->name('app.products');
});

Route::fallback(function(){
    echo 'Página inexistente. Retorne à <a href="'.route('site.index').'">página inicial</a>.';
});


