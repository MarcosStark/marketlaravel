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
Route::get('about', 'AboutController@about')->name('site.about');
Route::get('contact', 'ContactController@contact')->name('site.contact');
Route::get('/', 'MainController@main')->name('site.main');
Route::get('login', function(){return 'login';})->name('site.login');


Route::prefix('/app')->group(function(){
    Route::get('products', 'ProductController@product')->name('app.products');
    Route::get('clients', function(){return 'clientes';})->name('app.clients');
    Route::get('suppliers', function(){return 'fornecedores';})->name('app.suppliers');
});