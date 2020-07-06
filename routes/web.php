<?php

use Illuminate\Support\Facades\Route;

Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false
]);


Route::group(['middleware' => 'auth'], function() {
    Route::group(['middleware' => 'is_admin'], function() {
        Route::get('/home', 'HomeController@index')->name('home');
    });
    
    Route::group(['middleware' => 'is_editor'], function() {
        //Route::get('/editor', 'MainController@editor')->name('editor');
        Route::resource('/editor', 'Admin\SaleController')->except([
            'show', 'edit', 'update', 'destroy'
        ]);
        Route::get('/editor/{sale}/edit', 'Admin\SaleController@edit')->name('editor-edit');
        Route::put('/editor/{sale}', 'Admin\SaleController@update')->name('editor.update');
        Route::delete('/editor/{sale}', 'Admin\SaleController@destroy')->name('editor.destroy');
        
        
        Route::resource('/editor-menu', 'Admin\ProductController')->except([
            'show', 'edit', 'update', 'destroy'
        ]);
        Route::get('/editor-menu/{product}', 'Admin\ProductController@show')->name('editor-menu-show');
        Route::get('/editor-menu/{product}/edit', 'Admin\ProductController@edit')->name('editor-menu-edit');
        Route::put('/editor-menu/{product}', 'Admin\ProductController@update')->name('editor-menu.update');
        Route::delete('/editor-menu/{product}', 'Admin\ProductController@destroy')->name('editor-menu.destroy');
       
        
        
        //Route::get('/editor-menu/{product}', 'Admin\ProductController@edit')->name('editor-menu-edit');
        
       // Route::get('editor-menu/{product}', 'Admin\ProductController@show');
    });
    Route::get('/myorders', 'MainController@myorders')->name('myorders');
});

//Route::get('/editor', 'MainController@editor')->name('editor');
//Route::get('/myorders', 'MainController@myorders')->name('myorders');


Route::get('/logout', 'Auth\LoginController@logout')->name('getlogout');



// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/menu', function () {
//     return view('menu');
// });

Route::get('/', 'MainController@index')->name('index');
//Route::get('/sale', 'MainController@sale')->name('sale');
Route::get('/menu', 'MainController@menu')->name('menu');
Route::get('/contacts', 'MainController@contacts')->name('contacts');

Route::get('/auth', 'MainController@auth');
Route::get('/cart', 'CartController@cart')->name('cart');
//Route::get('/item', 'MainController@menuitem');


Route::get('/sale', 'MainController@saleshow')->name('sale');
// Route::get('/sale', function () {
//     $sales = DB::table('pdsales')->get();
//     return view('sale', compact('sales'));
// })->name('sale');



//Route::get('/menu', function () {
    //$products = DB::table('pdproducts')->get();
    //return view('menu', compact('products'));
  //  return view('menu');
//});

Route::get('/{product}', function ($id) {
    $product = DB::table('pdproducts')->find($id);
    return view('menu-item', compact('product'));
});

Route::post('cart/add/{id}', 'CartController@cartadd')->name('cartadd');
Route::post('cart/remove/{id}', 'CartController@cartremove')->name('cartremove');


Route::post('/cart', 'CartController@cartconfirm')->name('cartconfirm');
