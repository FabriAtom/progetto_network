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

route::get('/', function() {
    return view('home');
})->name('homepage');


Route::get('/guesthome', 'GuestController@index')->name('index');
Route::get('/show/{id}', 'GuestController@show')->name('show');

// Route::get('/', function () {
//     return view('guest.home');
// })->name('guest.home');



// Route::resource('reviews', 'ReviewController');
Route::resource('messages', 'MessageController');

Auth::routes();

Route::middleware('auth')
    ->namespace('Admin')
    ->name('admin.')
    ->prefix('admin')
    ->group(
        function () {
            // rotta dashboard
            Route::get('/home', 'HomeController@index')->name('home');
            Route::resource('posts', 'PostController');
            Route::resource('users', 'UserController');
        }
    );

// Route::get('{any?}', function () {
//     return view('guest.home');
// })->where('any', '.*');
