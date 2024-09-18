<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PostController;
use TCG\Voyager\Facades\Voyager;

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


Route::get('/blog/{slug}', [HomeController::class,'post']);

Route::get('/page/{slug}', [HomeController::class,'showPage']);
Route::get('/', [HomeController::class,'index']);


Route::get('/category', function () {
    return view('category');
});
Route::get('/about', function () {
    return view('about');
});


Route::get('/contact', function () {
    return view('contact');
});
Route::get('/single', function () {
    return view('single');
});

Route::get('/author', function () {
    return view('author');
});


Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
