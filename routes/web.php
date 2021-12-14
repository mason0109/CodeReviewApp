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
Route::get('/dashboard', function(){
    return view('dashboard');
}) -> middleware(['auth'])->name('dashboard');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/logout', '\App\Http\Controllers\Auth\AuthenticatedSessionController@destroy');

Route::get('/profile/{id}', [UserController::class, 'show']) ->middleware('auth') ->name('user.profile');


Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/{id}', [PostController::class, 'show']);

//user creation
Route::get('/users/create', [UserController::class, 'create']) ->name('users.create');

Route::post('/users', [UserController::class, 'store']) ->name('users.store');

Route::get('/users/{id}', [UserController::class, 'show']);

//Sign in 
Route::get('/auth/home', [UserController::class, 'auth']) ->name('user.home');

//View a post
Route::get('/auth/post/{id}', [PostController::class, 'show']) ->name('post.show');

//Create new post
Route::get('/auth/post/new/1', [PostController::class, 'create']) ->name('post.create');

Route::post('/newpost', [PostController::class, 'store']) ->middleware('auth') ->name('post.store');

//Edit a post 
Route::get('/post/edit/{id}', [PostController::class, 'edit']) ->middleware('auth') ->name('posts.edit');

Route::patch('/post/update/{id}', [PostController::class, 'update']) ->middleware('auth') ->name('posts.update');

//Delete a post
Route::delete('/posts/delete', [PostController::class, 'destroy']) ->middleware('auth') ->name('posts.delete');

require __DIR__.'/auth.php';
