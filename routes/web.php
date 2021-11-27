<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;


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
})->name('welcome');

Route::get('/profile/{user}', function($user){
    return view('profile', ['user' => $user]);
});

Route::get('/users', [UserController::class, 'index']);

Route::get('/users/{id}', [UserController::class, 'show']);

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/{id}', [PostController::class, 'show']);

Route::get('/newAcc', function(){
    return view('reg');
})->name('reg');;

Route::get('/home', [PostController::class, 'index']);

require __DIR__.'/auth.php';
