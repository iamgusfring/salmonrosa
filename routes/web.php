<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\InstagramController;
use App\Http\Controllers\TwitterController;
use App\Http\Controllers\LinkedinController;
use App\Http\Controllers\MktController;

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
    return view('welcome');
});

//Auth::routes();
Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);



/**
 * 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 */


/**
 * Web
 */
Route::get('/facebook', [FacebookController::class, 'index'])->name('facebook');
Route::post('/facebook', [FacebookController::class, 'store']);

Route::get('/instagram', [InstagramController::class, 'index'])->name('instagram');
Route::post('/instagram', [InstagramController::class, 'store']);

Route::get('/twitter', [TwitterController::class, 'index'])->name('twitter');
Route::post('/twitter', [TwitterController::class, 'store']);

Route::get('/linkedin', [LinkedinController::class, 'index'])->name('linkedin');
Route::post('/linkedin', [LinkedinController::class, 'store']);

Route::get('/mkt', [MktController::class, 'index'])->name('mkt');
Route::post('/mkt', [MktController::class, 'store']);




/**
 * dashboard
 */

Route::group(['middleware' => ['auth']], function () { 
    Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboardfacebook', [FacebookController::class, 'dashboardFacebook'])->name('dashboardfacebook');
    Route::get('/dashboardinstagram', [InstagramController::class, 'dashboardInstagram'])->name('dashboardinstagram');
    Route::get('/dashboardtwitter', [TwitterController::class, 'dashboardTwitter'])->name('dashboardtwitter');
    Route::get('/dashboardlinkedin', [LinkedinController::class, 'dashboardLinkedin'])->name('dashboardlinkedin');
    Route::get('/dashboardmkt', [MktController::class, 'dashboardMkt'])->name('dashboardmkt');
});