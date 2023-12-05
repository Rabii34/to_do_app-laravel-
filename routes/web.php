<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;

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

// Route::get('/', function () {
//     return view('form');
// });
Route::get('/',[formController::class,'register']);
Route::post('/',[formController::class,'data']);
Route::get('/',[formController::class,'view']);
Route::get('/dlt/{id}',[formController::class,'dlt']);