<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/menu', function () {
//     return view('menu');
// });

Route::get('/', 'MainController@index');
Route::get('/sale', 'MainController@sale');
Route::get('/menu', 'MainController@menu');
Route::get('/contacts', 'MainController@contacts');

Route::get('/auth', 'MainController@auth');
Route::get('/cart', 'MainController@cart');
Route::get('/item', 'MainController@menuitem');


Route::get('/sale', function () {
    $sales = DB::table('pdsales')->get();
    return compact('sales');
});