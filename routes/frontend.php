<?php

use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:web')->group(function () {
    Route::view('/fe/courses', 'pages.frontend.auth.courses')->name('frontend.courses');
});

// Route::group(['middlware' => 'auth:web'], function () {
//     Route::view('/fe/courses', 'pages.frontend.auth.courses')->name('frontend.courses');
// });

    Route::prefix('/fe')->group(function () {
    Route::view('/blogs', 'pages.frontend.public.blog')->name('frontend.blog');
    Route::view('/careers', 'pages.frontend.public.careers')->name('frontend.careers');
    Route::view('/get-started', 'pages.frontend.public.get-started')->name('frontend.get-started');
    Route::view('/leaderships', 'pages.frontend.public.leaderships')->name('frontend.leaderships');
    Route::view('/life', 'pages.frontend.public.life')->name('frontend.life');
    Route::view('/login', 'pages.frontend.public.login')->name('frontend.login');
    Route::view('/news-centre', 'pages.frontend.public.news-centre')->name('frontend.news-centre');
    Route::view('/our-story', 'pages.frontend.public.our-story')->name('frontend.our-story');
    Route::view('/uk-resources', 'pages.frontend.public.uk-resources')->name('frontend.uk-resources');
    Route::view('/why-study-in-canada', 'pages.frontend.public.why-study-in-canada')->name('frontend.why-study-in-canada');
    Route::view('/view-open-roles', 'pages.frontend.public.view-open-roles')->name('frontend.view-open-roles');
    Route::view('/view-all-posts', 'pages.frontend.public.view-all-posts')->name('frontend.view-all-posts');
    Route::view('/uniwolc-registration', 'pages.frontend.public.uniwolc-registration')->name('frontend.uniwolc-registration');
    Route::view('/uniwolc-ranks-on-deloitte-technology-fast-50-list-for-2022', 'pages.frontend.public.uniwolc-ranks-on-deloitte-technology-fast-50-list-for-2022')->name('frontend.uniwolc-ranks-on-deloitte-technology-fast-50-list-for-2022');
    Route::view('/uniwolc-fees', 'pages.frontend.public.uniwolc-fees')->name('frontend.uniwolc-fees');
    Route::view('/university-of-toronto-rotman-school-of-management', 'pages.frontend.public.university-of-toronto-rotman-school-of-management')->name('frontend.university-of-toronto-rotman-school-of-management');
    Route::view('/university-of-tasmania-UTAS-hobart', 'pages.frontend.public.university-of-tasmania-UTAS-hobart')->name('frontend.university-of-tasmania-UTAS-hobart');
    Route::view('/uniInsights', 'pages.frontend.public.uniInsights')->name('frontend.uniInsights');
    Route::view('/types-of-PTE-tests-vouchers', 'pages.frontend.public.types-of-PTE-tests-vouchers')->name('frontend.types-of-PTE-tests-vouchers');
    Route::view('/tuition-payments-made-easy', 'pages.frontend.public.tuition-payments-made-easy')->name('frontend.tuition-payments-made-easy');
    Route::view('/trends-report', 'pages.frontend.public.trends-report')->name('frontend.trends-report');

});

Route::group([
    'as'         => 'frontend.',
    'controller' => FrontendController::class,
], function () {

    Route::get('/student-register', 'createStudent')->name('student-register');
    Route::get('/agent-register', 'createAgent')->name('agent-register');
    Route::get('/university-register', 'createUniversity')->name('university-register');


});
