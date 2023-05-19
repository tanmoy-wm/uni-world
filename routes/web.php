<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CountryController;
use App\Http\Controllers\Backend\CourseController;
use App\Http\Controllers\Backend\UniversityCourseController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\Users\AgentController;
use App\Http\Controllers\Backend\Users\StaffController;
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

Route::view('/', 'welcome')->name('welcome');

Route::view('/login', 'pages.auth.login')->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('auth.login');

Route::middleware('auth:web')->group(function () {

    Route::get('/logout', [LogoutController::class, 'logout'])->name('auth.logout');
    Route::get('/profile', [ProfileController::class, 'profile'])->name('auth.profile');
    Route::post('/change-password', [ProfileController::class, 'changePassword'])->name('auth.changePassword');

    Route::view('/dashboard', 'pages.backend.dashboard')->name('backend.dashboard');
    Route::prefix('/backend')->group(function () {
        Route::middleware('UserTypeCheck:Admin')->group(function () {
            Route::group([
                'as' => 'admins.',
                'controller' => AdminController::class,
                'prefix' => '/admins'
            ], function () {
                Route::view('/', 'pages.admin.dashboard')->name('dashboard');
            });

            Route::group([
                'as' => 'agents.',
                'controller' => AgentController::class,
                'prefix' => '/agents'
            ], function () {
                Route::get('/create', 'create')->name('create');
                Route::get('/{id}/edit', 'edit')->name('edit');
                Route::get('/', 'index')->name('index');
                Route::post('/store', 'store')->name('store');
                Route::put('/{id}', 'update')->name('update');
                Route::get('/{id}/trashed', 'trashed')->name('trashed');
            });

            Route::view('/applications', 'pages.backend.application.index')->name('applications.index');

            Route::group([
                'as' => 'categories.',
                'controller' => CategoryController::class,
                'prefix' => '/categories'
            ], function () {
                Route::get('/create', 'create')->name('create');
                Route::get('/{id}/change-status', 'changeStatus')->name('changeStatus');
                Route::get('/{id}/edit', 'edit')->name('edit');
                Route::get('/', 'index')->name('index');
                Route::post('/store', 'store')->name('store');
                Route::put('/{id}', 'update')->name('update');
                Route::get('/{id}/trashed', 'trashed')->name('trashed');
            });

            Route::get('/countries', [CountryController::class, 'index'])->name('countries.index');
            Route::get('/countries/{id}/change-status', [CountryController::class, 'changeStatus'])->name('countries.changeStatus');

            Route::group([
                'as' => 'courses.',
                'controller' => CourseController::class,
                'prefix' => '/courses'
            ], function () {

                Route::view('/', 'pages.backend.course.index')->name('index');
                Route::view('/create', 'pages.backend.course.create')->name('create');
                Route::post('/store', 'store')->name('store');
            });

            Route::view('/letter-request', 'pages.backend.latter-request.index')->name('letter-request.index');

            Route::view('/payments', 'pages.backend.payments.index')->name('payments.index');

            Route::prefix('/reports')->group(function () {
                Route::view('/agents', 'pages.backend.reports.agent')->name('reports.agent');
                Route::view('/applications', 'pages.backend.reports.application')->name('reports.application');
                Route::view('/payments', 'pages.backend.reports.payment')->name('reports.payment');
                Route::view('/staffs', 'pages.backend.reports.staff')->name('reports.staff');
                Route::view('/students', 'pages.backend.reports.student')->name('reports.student');
            });

            Route::group([
                'as' => 'staffs.',
                'controller' => StaffController::class,
                'prefix' => '/staffs'
            ], function () {
                Route::get('/create', 'create')->name('create');
                Route::get('/{id}/edit', 'edit')->name('edit');
                Route::get('/', 'index')->name('index');
                Route::post('/store', 'store')->name('store');
                Route::get('/{id}/trashed', 'trashed')->name('trashed');
                Route::put('/{id}', 'update')->name('update');
            });

            Route::prefix('/settings')->group(function () {
                Route::view('/general', 'pages.backend.settings.general.index')->name('general.index');
            });

            Route::group([
                'as' => 'students.',
                'controller' => StudentController::class,
                'prefix' => '/students'
            ], function () {
                Route::get('/create', 'create')->name('create');
                Route::get('/{id}', 'edit')->name('edit');
                Route::get('/', 'index')->name('index');
                Route::post('/store', 'store')->name('store');
                Route::get('/{id}/trashed', 'trashed')->name('trashed');
                Route::put('/{id}', 'update')->name('update');
            });


            Route::group([
                'as' => 'universities.',
                'controller' => UniversityController::class,
                'prefix' => '/universities'
            ], function () {
                Route::get('/create', 'create')->name('create');
                Route::get('/{id}/edit', 'edit')->name('edit');
                Route::get('/', 'index')->name('index');
                Route::post('/store', 'store')->name('store');
                Route::get('/{id}/trashed', 'trashed')->name('trashed');
                Route::put('/{id}', 'update')->name('update');
            });

            Route::group([
                'as'         => 'university-courses.',
                'controller' => UniversityCourseController::class,
                'prefix'     => '/university/courses'
            ], function () {
                Route::get('/{id}/changeStatus', 'changeStatus')->name('changeStatus');
                Route::get('/create', 'create')->name('create');
                Route::get('/{id}/edit', 'edit')->name('edit');
                Route::get('/', 'index')->name('index');
                Route::post('/store', 'store')->name('store');
                Route::get('/{id}/trashed', 'trashed')->name('trashed');
                Route::put('/{id}', 'update')->name('update');
            });
        });
    });


    Route::middleware(['UserTypeCheck:Student,Admin'])->group(function () {
        Route::view('/test', 'pages.test')->name('test');
    });
});
