<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



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

Route::get('/', 'HomeController@index')->name('home');

// ROTTE STATICHE

Route::get('guests/contatti', function(){
    return view('guests.contatti');
})->name('contatti');

Route::get('guests/partners', function(){
    return view('guests.partners');
})->name('partners');

Route::get('guests/gadget', function(){
    return view('guests.gadget');
})->name('gadget');

Route::get('guests/google', function(){
    return view('guests.google');
})->name('google');

Route::get('guests/azienda', function(){
    return view('guests.azienda');
})->name('azienda');


Route::get('guests/riepilogo', 'CartController@cart')->name('riepilogo');

Route::resource('guests', 'GuestController');



// Area riservata -- rotte
Auth::routes();

Route::prefix('admin')->namespace('Admin')->name('admin.')->middleware('auth')->group(function() {
    Route::get('/', 'HomeController@index')->name('home');

    //rotte crud
    Route::resource('restaurants', 'RestaurantController');

    //Route::get('newrestaurant/{id}', 'DishController@create')->name('newrestaurant.create');

    Route::get('dishes/create/{id}', [
        'as' => 'dishes.create',
        'uses' => 'DishController@create'
    ]);
    Route::resource('dishes', 'DishController')->except(['create']);

    //Route::resource('dishes', 'DishController', ['except' => 'create']);

    Route::resource('orders', 'OrderController');
});

//Route::get('/home', 'HomeController@index')->name('home');
