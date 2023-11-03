<?php

use App\Http\Controllers\PropertyController;
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