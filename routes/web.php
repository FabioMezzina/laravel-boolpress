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

/**
 * WELCOME HOMEPAGE (public)
 */
Route::get('/', 'HomeController@index')->name('home');

/**
 * PUBLIC ROUTES
 */
Route::get('posts', 'PostController@index')->name('posts.index');
Route::get('posts/{slug}', 'PostController@show')->name('posts.show');


/**
 * AUTHENTICATION ROUTES
 */
Auth::routes();

/**
 * LOGGED USER ROUTES
 */
Route::prefix('admin')
    ->namespace('Admin')
    ->name('admin.')
    ->middleware('auth')
    ->group(function() {
        // home admin route
        Route::get('/', 'HomeController@index')->name('home');

        // Post crud route
        Route::resource('posts', 'PostController');
    });
