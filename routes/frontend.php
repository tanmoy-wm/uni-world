<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/fe')->group(function () {
    Route::view('/register', 'pages.frontend.register')->name('frontend.register');
});
