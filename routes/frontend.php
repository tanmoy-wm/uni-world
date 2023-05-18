<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/fe')->group(function () {
    Route::view('/blogs', 'pages.frontend.public.blog')->name('frontend.blog');
    Route::view('/careers', 'pages.frontend.public.careers')->name('frontend.careers');
    Route::view('/courses', 'pages.frontend.auth.courses')->name('frontend.courses');
    Route::view('/get-started', 'pages.frontend.public.get-started')->name('frontend.get-started');
    Route::view('/leaderships', 'pages.frontend.public.leaderships')->name('frontend.leaderships');
    Route::view('/life', 'pages.frontend.public.life')->name('frontend.life');
    Route::view('/login', 'pages.frontend.public.login')->name('frontend.login');
    Route::view('/news-centre', 'pages.frontend.public.news-centre')->name('frontend.news-centre');
    Route::view('/our-story', 'pages.frontend.public.our-story')->name('frontend.our-story');
    Route::view('/register', 'pages.frontend.public.register')->name('frontend.register');
    Route::view('/uk-resources', 'pages.frontend.public.uk-resources')->name('frontend.uk-resources');
});
