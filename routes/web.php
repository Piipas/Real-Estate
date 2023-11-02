<?php

use Illuminate\Support\Facades\Route;
use \App\Models\Property;

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
    return view('index', [
        'lastProperties' => Property::all()->take(4),
        'categories' => \App\Models\Property::types,
    ]);
});
