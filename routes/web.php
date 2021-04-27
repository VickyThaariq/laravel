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
    return view('login');
});

Route::post('/login', 'App\Http\Controllers\UserController@login');

Route::get('/home', function () {
    return view('home', ['nama' => 'Administrator',
    'jabatan' => 'admin']);
});

Route::get('/greeting', function () {
    return 'Vicky Thaariq Aziz';
});

Route::prefix('/admin')->group(function(){
    Route::get('/users', function () {
        return 'halaman user';
    });

    Route::get('/admins', function () {
        return 'halaman admins';
    });
});

Route::get('/users/{id}', function ($id) {
    return 'Selamat datang '.$id;
});

Route::get('/post/{post}/comment/{comment}', function ($postId, $commantId) {
    return 'ada di post '.$postId.' komen di '.$commantId;
});

Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
})->where('name', '[A-Za-z \']{3,}');
