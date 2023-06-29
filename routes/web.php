<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\KaryawanController;

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
    return "hello world!";
});
Route::get('/home',[DataController::class, 'index']);

Route::get('/kehadiran',[DataController::class, 'coba']);
    // Route::get('/kehadiran',[DataController::class, 'index'], function() {
    //     return view('kehadiran');
    // });

Route::get('login',function() {
    return view('login');
}); 