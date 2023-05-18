<?php

use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;

Route::prefix('/fe')->group(function () {
    Route::view('/assist', 'pages.frontend.public.assist')->name('frontend.assist');
    Route::view('/application-process', 'pages.frontend.public.application-process')->name('frontend.application-process');
    Route::view('/application-requirements-101-united-kingdom', 'pages.frontend.public.application-requirements-101-united-kingdom')->name('frontend.application-requirements-101-united-kingdom');
Route::middleware('auth:web')->group(function () {
    Route::view('/fe/courses', 'pages.frontend.auth.courses')->name('frontend.courses');
});

// Route::group(['middlware' => 'auth:web'], function () {
//     Route::view('/fe/courses', 'pages.frontend.auth.courses')->name('frontend.courses');
// });

    Route::prefix('/fe')->group(function () {
    Route::view('/blogs', 'pages.frontend.public.blog')->name('frontend.blog');
    Route::view('/careers', 'pages.frontend.public.careers')->name('frontend.careers');
    Route::view('/choosing-an-english-proficiency', 'pages.frontend.public.choosing-an-english-proficiency')->name('frontend.choosing-an-english-proficiency');
    Route::view('/contact-us', 'pages.frontend.public.contact-us')->name('frontend.contact-us');
    Route::view('/courses', 'pages.frontend.auth.courses')->name('frontend.courses');
    Route::view('/discover-schools', 'pages.frontend.public.discover-schools')->name('frontend.discover-schools');
    Route::view('/education-partners', 'pages.frontend.public.education-partners')->name('frontend.education-partners');
    Route::view('/featured-study-destinations', 'pages.frontend.public.featured-study-destinations')->name('frontend.featured-study-destinations');
    Route::view('/get-started', 'pages.frontend.public.get-started')->name('frontend.get-started');
    Route::view('/gre-vs-gmat-what-you-need-to-know', 'pages.frontend.public.gre-vs-gmat-what-you-need-to-know')->name('frontend.gre-vs-gmat-what-you-need-to-know');
    Route::view('/international-student-gic-program', 'pages.frontend.public.international-student-gic-program')->name('frontend.international-student-gic-program');
    Route::view('/leaderships', 'pages.frontend.public.leaderships')->name('frontend.leaderships');
    Route::view('/life', 'pages.frontend.public.life')->name('frontend.life');
    Route::view('/login', 'pages.frontend.public.login')->name('frontend.login');
    Route::view('/new-associate', 'pages.frontend.public.new-associate')->name('frontend.new-associate');
    Route::view('/news-centre', 'pages.frontend.public.news-centre')->name('frontend.news-centre');
    Route::view('/our-solutions', 'pages.frontend.public.our-solutions')->name('frontend.our-solutions');
    Route::view('/our-story', 'pages.frontend.public.our-story')->name('frontend.our-story');
    Route::view('/our-solutions-two', 'pages.frontend.public.our-solutions-two')->name('frontend.our-solutions-two');
    Route::view('/partner-schools', 'pages.frontend.public.partner-schools')->name('frontend.partner-schools');
    Route::view('/press', 'pages.frontend.public.press')->name('frontend.press');
    Route::view('/recruiters', 'pages.frontend.public.recruiters')->name('frontend.recruiters');
    Route::view('/resources', 'pages.frontend.public.resources')->name('frontend.resources');
    Route::view('/register', 'pages.frontend.public.register')->name('frontend.register');
    Route::view('/save-more-on-english-tests', 'pages.frontend.public.save-more-on-english-tests')->name('frontend.save-more-on-english-tests');
    Route::view('/see-program-details', 'pages.frontend.auth.see-program-details')->name('frontend.see-program-details');
    Route::view('/stem-for-change-scholarship', 'pages.frontend.public.stem-for-change-scholarship')->name('frontend.stem-for-change-scholarship');
    Route::view('/student-success', 'pages.frontend.public.student-success')->name('frontend.student-success');
    Route::view('/students', 'pages.frontend.public.students')->name('frontend.students');
    Route::view('/study-in-canada-guide', 'pages.frontend.public.study-in-canada-guide')->name('frontend.study-in-canada-guide');
    Route::view('/study-in-canada-guide-two', 'pages.frontend.public.study-in-canada-guide-two')->name('frontend.study-in-canada-guide-two');
    Route::view('/trends-report', 'pages.frontend.public.trends-report')->name('frontend.trends-report');
    Route::view('/tuition-payments-made-easy', 'pages.frontend.public.tuition-payments-made-easy')->name('frontend.tuition-payments-made-easy');
    Route::view('/types-of-PTE-tests-vouchers', 'pages.frontend.public.types-of-PTE-tests-vouchers')->name('frontend.types-of-PTE-tests-vouchers');
    Route::view('/uk-resources', 'pages.frontend.public.uk-resources')->name('frontend.uk-resources');
    Route::view('/uni-insights', 'pages.frontend.public.uniInsights')->name('frontend.uni-insights');
    Route::view('/uniwolc-fees', 'pages.frontend.public.uniwolc-fees')->name('frontend.uniwolc-fees');
    Route::view('/why-study-in-canada', 'pages.frontend.public.why-study-in-canada')->name('frontend.why-study-in-canada');
    Route::view('/view-open-roles', 'pages.frontend.public.view-open-roles')->name('frontend.view-open-roles');
    Route::view('/view-all-posts', 'pages.frontend.public.view-all-posts')->name('frontend.view-all-posts');
    Route::view('/uniwolc-registration', 'pages.frontend.public.uniwolc-registration')->name('frontend.uniwolc-registration');
    Route::view('/uniwolc-ranks-on-deloitte-technology-fast-50-list-for-2022', 'pages.frontend.public.uniwolc-ranks-on-deloitte-technology-fast-50-list-for-2022')->name('frontend.uniwolc-ranks-on-deloitte-technology-fast-50-list-for-2022');
    Route::view('/uniwolc-fees', 'pages.frontend.public.uniwolc-fees')->name('frontend.uniwolc-fees');
    Route::view('/university-of-toronto-rotman-school-of-management', 'pages.frontend.public.university-of-toronto-rotman-school-of-management')->name('frontend.university-of-toronto-rotman-school-of-management');
    Route::view('/university-of-tasmania-UTAS-hobart', 'pages.frontend.public.university-of-tasmania-UTAS-hobart')->name('frontend.university-of-tasmania-UTAS-hobart');
    Route::view('/uniwolc-registration', 'pages.frontend.public.uniwolc-registration')->name('frontend.uniwolc-registration');
    Route::view('/uniInsights', 'pages.frontend.public.uniInsights')->name('frontend.uniInsights');
    Route::view('/uniInsights', 'pages.frontend.public.uniInsights')->name('frontend.uniInsights');
    Route::view('/uniInsights', 'pages.frontend.public.uniInsights')->name('frontend.uniInsights');
    Route::view('/view-open-roles', 'pages.frontend.public.view-open-roles')->name('frontend.view-open-roles');
    Route::view('/view-all-posts', 'pages.frontend.public.view-all-posts')->name('frontend.view-all-posts');
    Route::view('/what-is-the-pte-test', 'pages.frontend.public.what-is-the-pte-test')->name('frontend.what-is-the-pte-test');
    Route::view('/why-study-design-and-illustration', 'pages.frontend.public.why-study-design-and-illustration')->name('frontend.why-study-design-and-illustration');
    Route::view('/why-study-in-canada', 'pages.frontend.public.why-study-in-canada')->name('frontend.why-study-in-canada');
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
