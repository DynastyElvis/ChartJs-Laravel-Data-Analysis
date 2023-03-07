<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartJSController;

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

Route::get('/', function () {
    return view('welcome');
});

// use App\Http\Controllers\ChartJSController;
// Route::get('/chart}' , [ChartJSController::class,'index']);

Route::get('/chart', [ChartJSController::class, 'index'])->name('chart.index');
