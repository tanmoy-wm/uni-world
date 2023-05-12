<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use Illuminate\Support\Facades\Route;

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

Route::view('/test', 'pages.test');
Route::view('/login', 'pages.auth.login');
Route::post('/login', [LoginController::class, 'login'])->name('auth.login');
Route::get('/logout', [LogoutController::class, 'logout'])->name('auth.logout');
    
Route::group([
    'as'         => 'admins.',
    'controller' => AdminController::class,
    'prefix'     => '/admins'
], function () {
    Route::view('/', 'pages.admin.dashboard')->name('dashboard');
});
