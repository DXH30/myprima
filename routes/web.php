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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::redirect('/', '/landing');

Route::get('/login', 'App\Http\Controllers\AuthController@login_page')->name('login');
Route::get('/logout', 'App\Http\Controllers\AuthController@logout');
Route::get('/register', 'App\Http\Controllers\AuthController@register_page');

Route::post('/login', 'App\Http\Controllers\AuthController@login');
Route::post('/register', 'App\Http\Controllers\AuthController@register');
Route::get('/landing', 'App\Http\Controllers\LandingController');

Route::middleware('auth')->group(function() {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController');
    Route::get('/muser', 'App\Http\Controllers\UserController@manajemen_user');

    Route::get('/pdepartment', 'App\Http\Controllers\DepartmentController@page');
    Route::post('/department', 'App\Http\Controllers\DepartmentController@create');
    Route::get('/department', 'App\Http\Controllers\DepartmentController@read');
    Route::post('/edepartment', 'App\Http\Controllers\DepartmentController@update');
    Route::get('/edepartment/{id}', 'App\Http\Controllers\DepartmentController@edit');
    Route::get('/ddepartment/{id}', 'App\Http\Controllers\DepartmentController@delete');

    Route::get('/pchat', 'App\Http\Controllers\ChatController@page');
    Route::post('/chat', 'App\Http\Controllers\ChatController@create');
    Route::get('/chat', 'App\Http\Controllers\ChatController@read');
    Route::post('/chat_e', 'App\Http\Controllers\ChatController@update');
    Route::delete('/chat', 'App\Http\Controllers\ChatController@delete');

    Route::post('/comment/{id}', 'App\Http\Controllers\CommentController@input');

    Route::get('/pthread', 'App\Http\Controllers\ThreadController@page');
    Route::post('/thread', 'App\Http\Controllers\ThreadController@create');
    Route::post('/thread_e', 'App\Http\Controllers\ThreadController@update');
    Route::delete('/thread', 'App\Http\Controllers\ThreadController@delete');
    Route::get('/thread/baca/{id}', 'App\Http\Controllers\ThreadController@baca');
});


