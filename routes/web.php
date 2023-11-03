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

Route::get('/', [\App\Http\Controllers\Controller::class, 'index']);

Route::get('/properties', [App\Http\Controllers\PropertyController::class, 'archive']);

Route::get('/property/{property}', [\App\Http\Controllers\PropertyController::class, 'showProperty']);

Route::get('/blog', [\App\Http\Controllers\ArticleController::class, 'archive']);

Route::get('/blog/{article}', [\App\Http\Controllers\ArticleController::class, 'show']);

Route::post('/comment/add/{article}', [\App\Http\Controllers\CommentController::class, 'store']);

Route::post('/comment/add/{article}/{parent}', [\App\Http\Controllers\CommentController::class, 'reply']);

Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'contact']);

Route::post('/contact/send', [\App\Http\Controllers\ContactController::class, 'store']);