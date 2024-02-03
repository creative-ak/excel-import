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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/test', function () {
//     return view('template.invoice');
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('users', App\Http\Controllers\UserController::class);
Route::resource('loads', App\Http\Controllers\LoadController::class);
Route::get('loads/pdf/{id}', [App\Http\Controllers\LoadController::class,'generatePdf'])->name('loads.pdf');
Route::post('/upload', [App\Http\Controllers\UserController::class, 'upload'])->name('upload');
