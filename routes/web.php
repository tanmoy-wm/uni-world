<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\Users\AgentController;
use App\Http\Controllers\Backend\Users\StudentController;
use App\Http\Controllers\Backend\Users\UniversityController;

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


Route::view('/login', 'pages.auth.login')->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('auth.login');
Route::get('/logout', [LogoutController::class, 'logout'])->name('auth.logout');

Route::middleware('auth')->group(function () {
    Route::group([
        'as'         => 'admins.',
        'controller' => AdminController::class,
        'prefix'     => '/admins'
    ], function () {
        Route::view('/', 'pages.admin.dashboard')->name('dashboard');
    });

    Route::group([
        'as'         => 'agents.',
        'controller' => AgentController::class,
        'prefix'     => '/agents'
    ], function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
    });


    Route::group([
        'as'         => 'students.',
        'controller' => StudentController::class,
        'prefix'     => '/students'
    ], function () {
        Route::get('/create', 'create')->name('create');
        Route::get('/{id}', 'edit')->name('edit');
        Route::get('/', 'index')->name('index');
        Route::post('/store', 'store')->name('store');
        Route::get('/{id}/trashed', 'trashed')->name('trashed');
        Route::put('/{id}', 'update')->name('update');
    });

    Route::group([
        'as'         => 'universities.',
        'controller' => UniversityController::class,
        'prefix'     => '/universities'
    ], function () {
        Route::get('/create', 'create')->name('create');
        Route::get('/', 'index')->name('index');
        Route::post('/store', 'store')->name('store');
        Route::get('/{id}/trashed', 'trashed')->name('trashed');
        Route::put('/{id}', 'update')->name('update');
    });
});
