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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', function () {
    $Pizzas = [
        ['type'=>'Margarita','base'=>'Cheezy  crusty'],
        ['type'=>'Hawein','base'=>'Garlic crusty'],
        ['type'=>'Volcano','base'=>'Soft & Crunshy'],
    ];
    return view('pizzas',['pizza' => $Pizzas]);
});
