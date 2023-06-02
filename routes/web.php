<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\Auth\SocialLoginController;
use App\Http\Controllers\Auth\StudentProfileController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CountryController;
use App\Http\Controllers\Backend\CourseController;
use App\Http\Controllers\Backend\PressController;
use App\Http\Controllers\Backend\University\ProgramController;

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
Route::view('/landing', 'landing')->name('welcome');

Route::view('/backend/login', 'pages.auth.login')->name('backend.login');
Route::post('/backend/login', [LoginController::class, 'adminLogin'])->name('auth.admin.login');
Route::post('/login', [LoginController::class, 'login'])->name('auth.login');

Route::group([
    'as' => 'social.',
    'prefix' => '/login',
    'controller' => SocialLoginController::class,
], function () {
    Route::get('/google', 'redirectToGoogle')->name('google');
    Route::any('/google/callback', 'handleGoogleCallback')->name('google-callback');
    Route::get('/facebook', 'redirectToFacebook')->name('facebook');
    Route::any('/facebook/callback', 'handleFacebookCallback')->name('facebook-callback');
});

Route::middleware('auth:web')->group(function () {

    Route::get('/logout', [LogoutController::class, 'logout'])->name('auth.logout');
    Route::get('/profile/edit', [ProfileController::class, 'editProfile'])->name('auth.edit-profile');
    Route::put('/profile/update', [ProfileController::class, 'updateProfile'])->name('auth.update-profile');
    Route::get('/profile', [ProfileController::class, 'profile'])->name('auth.profile');
    Route::view('/change-password', 'pages.auth.change-password')->name('change-password');
    Route::put('/update-password', [ProfileController::class, 'changePassword'])->name('auth.change-password');

    Route::group([
        'as'    => 'student.profile.',
        'prefix' => '/profile',
        'controller' => StudentProfileController::class
    ], function () {
        Route::get('/education-history', 'educationHistory')->name('education-history');
        Route::put('/education-history', 'updateEducationHistory')->name('update-education-history');
        Route::get('/test-score', 'testScore')->name('test-score');
        Route::put('/test-score', 'updateTestScore')->name('update-test-score');
        Route::get('/visa-and-permit', 'visaAndPermit')->name('visa-and-permit');
        Route::put('/visa-and-permit', 'updateVisaAndPermit')->name('update-visa-and-permit');
        Route::put('/update-eng-test-score', 'updateEnglishTestScore')->name('update-eng-test-score');
    });

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

            Route::group([
                'as' => 'blogs.',
                'controller' => BlogController::class,
                'prefix' => '/blogs'
            ], function () {
                Route::get('/create', 'create')->name('create');
                // Route::get('/{id}/change-status', 'changeStatus')->name('changeStatus');
                Route::get('/{id}/edit', 'edit')->name('edit');
                Route::get('/', 'index')->name('index');
                Route::post('/store', 'store')->name('store');
                Route::put('/{id}', 'update')->name('update');
                Route::get('/{id}/trashed', 'trashed')->name('trashed');
            });

            Route::group([
                'as' => 'press.',
                'controller' => PressController::class,
                'prefix' => '/press'
            ], function () {
                Route::get('/create', 'create')->name('create');
                // Route::get('/{id}/change-status', 'changeStatus')->name('changeStatus');
                Route::get('/{id}/edit', 'edit')->name('edit');
                Route::get('/', 'index')->name('index');
                Route::post('/store', 'store')->name('store');
                Route::put('/{id}', 'update')->name('update');
                Route::get('/{id}/trashed', 'trashed')->name('trashed');
            });

            Route::group([
                'as' => 'countries.',
                'controller' => CountryController::class,
                'prefix' => '/countries'
            ], function () {
                Route::get('/create', 'create')->name('create');
                Route::get('/{id}/change-status', 'changeStatus')->name('changeStatus');
                Route::get('/{id}/edit', 'edit')->name('edit');
                Route::get('/', 'index')->name('index');
                Route::post('/store', 'store')->name('store');
                Route::put('/{id}', 'update')->name('update');
                Route::get('/{id}/trashed', 'trashed')->name('trashed');
            });

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
                'as' => 'programs.',
                'controller' => ProgramController::class,
                'prefix' => '/programs'
            ], function () {
                Route::get('/{id}/changeStatus', 'changeStatus')->name('changeStatus');
                Route::get('/create', 'create')->name('create');
                Route::get('/{id}/edit', 'edit')->name('edit');
                Route::get('/', 'index')->name('index');
                Route::post('/store', 'store')->name('store');
                Route::get('/{id}/trashed', 'trashed')->name('trashed');
                Route::put('/{id}', 'update')->name('update');
            });

            Route::group([
                'as' => 'universities.',
                'controller' => UniversityController::class,
                'prefix' => '/university'
            ], function () {
                Route::get('/create', 'create')->name('create');
                Route::get('/{id}/edit', 'edit')->name('edit');
                Route::get('/', 'index')->name('index');
                Route::post('/store', 'store')->name('store');
                Route::get('/{id}/trashed', 'trashed')->name('trashed');
                Route::put('/{id}', 'update')->name('update');
            });
        });

        Route::middleware(['UserTypeCheck:University'])->group(function () {
            Route::group([
                'as' => 'university.',
                'controller' => UniversityController::class,
                'prefix' => '/university/{username}'
            ], function () {
                Route::get('/programs-index', 'programsIndex')->name('programs-index');
                Route::get('/create-program', 'createProgram')->name('create-program');
                Route::post('/store-program', 'storeProgram')->name('program-store');
                Route::get('/programs-edit/{id}', 'programsEdit')->name('programs-edit');
                Route::put('/{id}/update-program', 'updtedProgram')->name('program-update');
                Route::get('/{id}/change-status', 'changeStatus')->name('change-status');
            });
        });
    });

    Route::middleware(['UserTypeCheck:Student,Admin'])->group(function () {
        Route::view('/test', 'pages.test')->name('test');
    });
});
