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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/',function(){

    return view('UserInterface.home');
});

Route::get('/scholarship',function(){

    return view('UserInterface.scholarship');
});

Route::get('/source',function(){

    return view('UserInterface.source');
});

Route::get('/aboutus',function(){

    return view('UserInterface.aboutus');
});

Route::get('/contactus',function(){

    return view('UserInterface.contactus');
});

