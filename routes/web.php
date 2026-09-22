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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CapabilitiesController;
use App\Http\Controllers\CaseStudyController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\InsightsController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::view('/attorneys', 'attorneys');
Route::view('/capabilities', 'capabilities');
Route::view('/commercial-transactions', 'commercial-transactions');
Route::get('/case-study', [CaseStudyController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/insights', [InsightsController::class, 'index']);
Route::get('/detail', [DetailController::class, 'index']);
Route::get('/contact-us', [ContactController::class, 'index']);
Route::view('/attorney-detail', 'attorney-detail');
