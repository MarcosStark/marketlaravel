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
Route::get('about', 'AboutController@about');
Route::get('contact', 'ContactController@contact');
Route::get('/', 'MainController@main');
Route::get('product', 'ProductController@product');

Route::get('products/{name}/{quantity}/{value}',
function(string $name, int $quantity, float $value){
    echo "Nome: $name <br />Quantidade: $quantity <br /> Valor: $value <br />";
    }
)->where('name','[A-Za-z]+')->where('quantity','[0-9]');