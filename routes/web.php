<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Scholar\ScholarController;
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

//Route::get('/', function () {
//
//    return redirect('scholar/overview');
//});

Route::get('/', [LandingController::class, 'index'])->name('landing_view');
Route::post('landing_contact', [LandingController::class, 'contact'])->name('landing.contact');
Route::post('landing_subscribe', [LandingController::class, 'subscribe'])->name('landing.subscribe');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('login', [ScholarController::class, 'loginView'])->name('login_view');
Route::post('login', [AuthController::class, 'scholarLogin'])->name('scholar.login');
Route::get('register', [ScholarController::class, 'registerView'])->name('register_view');
Route::post('register', [AuthController::class, 'scholarRegister'])->name('scholar.register');

// Scholar role's Routing ========
Route::middleware('login_auth')->prefix('scholar')->group(function () {
    Route::get('overview', [ScholarController::class, 'overviewView'])->name('overview_view');
    Route::get('tracker', [ScholarController::class, 'trackerView'])->name('tracker_view');
    Route::get('axies', [ScholarController::class, 'axiesView'])->name('axies_view');
    Route::get('wallet', [ScholarController::class, 'walletView'])->name('wallet_view');
    Route::get('payments', [ScholarController::class, 'paymentsView'])->name('payments_view');
    Route::get('share', [ScholarController::class, 'shareView'])->name('share_view');
    Route::get('settings', [ScholarController::class, 'settingsView'])->name('settings_view');
    Route::get('faq', [ScholarController::class, 'faqView'])->name('faq_view');
});

