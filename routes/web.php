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

Route::get('/', function () {
    return view('productform');
});

Route::get("getdata", "product_controller@getdata");
Route::get("form","product_controller@form");
Route::post("insert", "product_controller@insert");
Route::get("delete/{id}","product_controller@delete");
Route::get("edit/{id}","product_controller@edit");
Route::post("edit/update/{id}", "product_controller@update");
