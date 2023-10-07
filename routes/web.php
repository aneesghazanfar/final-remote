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
    return view('index');
});

Route::get('saas', function () {
    return view('services_saas-development');
});
Route::get('mobile', function () {
    return view('mobile-app');
});
Route::get('web', function () {
    return view('web-services');
});
Route::get('soft-services', function () {
    return view('soft-services');
});
Route::get('saas-services', function () {
    return view('saas-services');
});

Route::get('saas-services2', function () {
    return view('services_saas-development');
});

Route::get('backend', function () {
    return view('Backend-services');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/cloud_dev', function () {
    return view('cloude_&_dev');
});


Route::get('/dedicated_team', function () {
    return view('dedicated_team');
});

Route::get('/qa_&_testing', function () {
    return view('qa_&_testing');
});

Route::get('/technology-consulting', function () {
    return view('technology-consulting');
});

Route::get('/android-app-development', function () {
    return view('android-app-development');
});
Route::get('/data', function () {
    return view('data');
});
Route::get('/ai', function () {
    return view('AI');
});
Route::get('/blockchain', function () {
    return view('blockchain');
});
Route::get('/ios-app-development', function () {
    return view('ios-app-development');
});
Route::get('/android-app-development', function () {
    return view('android-app-development');
});
Route::get('/cross-platfrom-app-development', function () {
    return view('cross-platfrom-app-development');
});
Route::get('/iot', function () {
    return view('iot');
});
Route::get('/automation', function () {
    return view('automation');
});
Route::get('/healthcare', function () {
    return view('healthcare');
});
Route::get('/transportation_logistics', function () {
    return view('transportation_logistics');
});
Route::get('/manufacturing-supply', function () {
    return view('manufacturing-supply');
});
Route::get('/media-entertainment', function () {
    return view('media-entertainment');
});
Route::get('/retail-software', function () {
    return view('retail-software');
});
Route::get('/e-learning', function () {
    return view('e-learning');
});
Route::get('/financial-software', function () {
    return view('financial-software');
});
Route::get('/ecommerce', function () {
    return view('ecommerce');
});
Route::get('/technology-consulting', function () {
    return view('technology-consulting');
});
Route::get('/ui-ux-design', function () {
    return view('ui-ux-design');
});