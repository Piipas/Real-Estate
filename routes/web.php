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

// Index Page
Route::get('/', [\App\Http\Controllers\Controller::class, 'index']);

// Properties Archive
Route::get('/properties', [App\Http\Controllers\PropertyController::class, 'archive']);

// Show Single Property
Route::get('/property/{property}', [\App\Http\Controllers\PropertyController::class, 'show']);

// Blog Archive
Route::get('/blog', [\App\Http\Controllers\ArticleController::class, 'archive']);

// Show Single Blog Article
Route::get('/blog/{article}', [\App\Http\Controllers\ArticleController::class, 'show']);

// Add New Comment
Route::post('/comment/add/{article}', [\App\Http\Controllers\CommentController::class, 'store']);

// Add New Comment Reply
Route::post('/comment/add/{article}/{parent}', [\App\Http\Controllers\CommentController::class, 'reply']);

// Contact Form Page
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'contact']);

// Send New Contact Message
Route::post('/contact/send', [\App\Http\Controllers\ContactController::class, 'store']);

// User Register Page
Route::get('/register', [\App\Http\Controllers\UserController::class, 'register'])->middleware('guest');

// Register New User 
Route::post('/register', [\App\Http\Controllers\UserController::class, 'store'])->middleware('guest');

// Login Page
Route::get('/login', [\App\Http\Controllers\UserController::class, 'login'])->middleware('guest');

// Logining User
Route::post('/login', [\App\Http\Controllers\UserController::class, 'auth'])->middleware('guest');

// Logout
Route::post('/logout', [\App\Http\Controllers\UserController::class, 'logout'])->middleware('auth');