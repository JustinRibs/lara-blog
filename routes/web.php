<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// show all posts
Route::get('/', [PostController::class, 'index']);
// show single post with comments
Route::get('/posts/{post}', [PostController::class, 'show']);
// create new posts
Route::post('/posts', [PostController::class, 'create']);
// create new comment
Route::post('/comment/{post}', [CommentController::class, 'create']);
// create new user
Route::post('/users', [UserController::class, 'create']);
// log user out
Route::post('/logout', [UserController::class, 'logout']);
// show signup page
Route::get('/signup', [UserController::class, 'signup']);
// show login page
Route::get('login', [UserController::class, 'login']);
// log user in
Route::post('authenticate', [UserController::class, 'authenticate']);

