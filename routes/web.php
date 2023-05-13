<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
<<<<<<< HEAD
use App\Http\Controllers\Users\StudentController;
use Illuminate\Support\Facades\Auth;
=======
use App\Http\Controllers\Backend\UniversityController;
>>>>>>> 354f8f1 (universitystore)
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

<<<<<<< HEAD
Route::group([
    'as'         => 'students.',
    'controller' => StudentController::class,
    'prefix'     => '/students'
], function () {
    Route::get('/create', 'create')->name('create');
    Route::get('/', 'index')->name('index');
    Route::post('/store', 'store')->name('store');
});
=======
    
Route::group([
    'as'         => 'universities.',
    'controller' => UniversityController::class,
    'prefix'     => '/universities'
], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
});

>>>>>>> 354f8f1 (universitystore)
