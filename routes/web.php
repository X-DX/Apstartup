<?php

use App\Http\Controllers\AdminController as ControllersAdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\DashboardController;
use App\Models\Dashboard;
use App\Http\Controllers\SectionbController;
use App\Http\Controllers\SectioncController;
use App\Http\Controllers\SectiondController;
use App\Http\Controllers\Startup_Application_Controller;
use App\Http\Controllers\PDFController;

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

require __DIR__ . '/auth.php';

Route::get('/', function () {
    return view('user/index');
})->name('index');

Route::get('/index', function () {
    return view('user/index');
})->name('index');


Route::get('nodal', function () {
    return view('user/nodal');
})->name('nodal');

Route::get('policies-guidelines', function () {
    return view('user/policies-guidelines');
})->name('policies-guidelines');

Route::get('mentors', function () {
    return view('user/mentors');
})->name('mentors');

Route::get('State-Start-Up-Registration', function () {
    return view('user/State-Start-Up-Registration');
})->name('State-Start-Up-Registration');

Route::get('Know-Your-Registration-Status', function () {
    return view('user/Know-Your-Registration-Status');
})->name('Know-Your-Registration-Status');

Route::get('grievance', function () {
    return view('user/grievance');
})->name('grievance');

Route::get('regulatory-issues', function () {
    return view('user/regulatory-issues');
})->name('regulatory-issues');

Route::get('check-status', function () {
    return view('user/check-status');
})->name('check-status');

// Route::get('startup-register', function () {
//     return view('user/startup-register');
// })->name('startup-register');


Route::get('registration-page', [ApplicationController::class, 'index'])
    ->middleware('auth')
    ->name('registration-page');

Route::post('registration', [ApplicationController::class, 'store'])
    ->middleware('auth')->name('registration');


Route::get('forget-password', function () {
    return view('user/forget-password');
})->name('forget-password');

Route::get('state-notification', function () {
    return view('user/state-notification');
})->name('state-notification');

Route::get('photo', function () {
    return view('user/photo');
})->name('photo');

Route::get('events', function () {
    return view('user/events');
})->name('events');

Route::get('gallery-slider', function () {
    return view('user/gallery-slider');
})->name('gallery-slider');

Route::get('contact', function () {
    return view('user/contact');
})->name('contact');


// user dashboard after login

Route::get('/dashboard', [ApplicationController::class, 'dashboard'])->middleware('auth')->name('dashboard');

Route::get('/user_profile', [DashboardController::class, 'profileShow'])->name('profile');

Route::get('/apply_for_recognition', [DashboardController::class, 'apply_for_recognition'])->name('apply_for_recognition');
Route::post('/sectionbstore', [SectionbController::class, 'storesectionb'])->name('sectionbstore');
Route::post('/sectioncstore', [SectioncController::class, 'storesectionc'])->name('sectioncstore');
Route::post('/sectiondstore', [SectiondController::class, 'storesectiond'])->name('sectiondstore');


Route::get('/apply_for_insectives', [DashboardController::class, 'apply_for_insectives'])->name('apply_for_insectives');

Route::get('/feedback', [DashboardController::class, 'feedback'])->name('feedback');

// Admin Side Show the Users details
Route::get('/Startup_Application', [Startup_Application_Controller::class, 'index'])->name('Startup_Application');
Route::get('/UserDetails', [Startup_Application_Controller::class, 'show_user_details'])->name('UserDetails');

// Downlord PDF of view 
Route::get('generate-pdf', [PDFController::class, 'generatePDF'])->name('generate-pdf');

