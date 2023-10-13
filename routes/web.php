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
Route::get('/services/mobile-app-development', function () {
    return view('mobile-app');
});
Route::get('/services/custom-web-development', function () {
    return view('web-services');
});
Route::get('soft-services', function () {
    return view('soft-services');
});
Route::get('/services/saas-development', function () {
    return view('saas-services');
});

Route::get('/services/cross-platfrom-app-development', function () {
    return view('cross-platfrom-app-development');
});

Route::get('saas-services2', function () {
    return view('services_saas-development');
});

Route::get('/services/back-end-development', function () {
    return view('Backend-services');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/services/cloud-consulting', function () {
    return view('cloude_&_dev');
});


Route::get('/services/dedicated-development-team', function () {
    return view('dedicated_team');
});

Route::get('/services/software-testing-qa', function () {
    return view('qa_&_testing');
});

Route::get('/services/technology-consulting', function () {
    return view('technology-consulting');
});

Route::get('/services/android-app-development', function () {
    return view('android-app-development');
});
Route::get('/services/big-data', function () {
    return view('data');
});

Route::get('/services/artificial-intelligence', function () {
    return view('AI');
});
Route::get('/services/iot-development-consulting', function () {
    return view('iot');
});

Route::get('/services/intelligent-process-automation', function () {
    return view('automation');
});

Route::get('/healthcare-software-development', function () {
    return view('healthcare');
});

Route::get('/services/ios-app-development', function () {
    return view('ios-app-development');
});
Route::get('/services/manufacturing-supply-chain', function () {
    return view('manufacturing-supply');
});

Route::get('/services/retail-software-development', function () {
    return view('retail-software');
});

Route::get('/services/transportation-logistics-software-development', function () {
    return view('transportation_logistics');
});

Route::get('/services/media-entertainment', function () {
    return view('media-entertainment');
});

Route::get('/services/e-learning-software-development', function () {
    return view('e-learning');
});

Route::get('/services/ecommerce-development', function () {
    return view('ecommerce');
});

Route::get('/it-support', function () {
    return view('it-support');
});

Route::get('/services/ui-ux-design', function () {
    return view('ui-ux-design');
});


Route::get('/services/blockchain-development', function () {
    return view('blockchain');
});

Route::get('/services/financial-software-development', function () {
    return view('financial-software');
});