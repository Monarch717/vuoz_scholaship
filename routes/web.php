<?php

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

Route::get('/', function () {

    return redirect('scholar/overview');
});

// Scholar role's Routing ========
Route::prefix('scholar')->group(function () {
    Route::get('overview', [ScholarController::class, 'index'])->name('overview_view');
});

