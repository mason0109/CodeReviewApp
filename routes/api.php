<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', [UserController::class, 'apiIndex']) ->name('api.users.index');

Route::post('/home', [CommentController::class, 'apiStore']) ->name('api.comments.store');

Route::get('/home', [PostController::class, 'apiIndex']) ->name('api.posts.index');

Route::get('/profile/{id}', [UserController::class, 'apiUserPosts']) ->name('api.users.userPosts');

//Route::get('/home', [CommentController::class, 'apiPostComments']) ->name('api.comments.index');