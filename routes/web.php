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
    // return "What's up";
});
// Route::get('/about', function () {
//     return "Learn about me, if that's something you're interested in...";
// });
// Route::get('/contact', function () {
//     return "Have you seen the movie contact?";
// });

// Route::get('/post/{id}', function ($id) {
//     return "This is the post with the an id of $id";
// });

Route::get('/post', '\App\Http\Controllers\PostsController@index');
