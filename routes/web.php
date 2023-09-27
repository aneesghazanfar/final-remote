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
