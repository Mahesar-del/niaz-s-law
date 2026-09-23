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
use App\Http\Controllers\AttorneysController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\Admin\HomePageSettingController;
use App\Http\Controllers\Admin\ContactSettingController;
use App\Http\Controllers\Admin\AttorneyController;
use App\Http\Controllers\Admin\CapabilityController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/attorneys', [AttorneysController::class, 'index']);
Route::get('/capabilities', [CapabilitiesController::class, 'index'])->name('capabilities');
Route::view('/commercial-transactions', 'commercial-transactions');
Route::view('/about', 'about');
Route::view('/about-us', 'about');
Route::get('/case-study', [CaseStudyController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/insights', [InsightsController::class, 'index']);
Route::get('/detail', [DetailController::class, 'index']);
Route::get('/contact-us', [ContactController::class, 'index']);
Route::view('/attorney-detail', 'attorney-detail');
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('login.attempt');

    Route::middleware('admin')->group(function () {
        Route::get('/', function () { return view('admin.dashboard'); })->name('dashboard');
        Route::get('/home-page-settings', [HomePageSettingController::class, 'edit'])->name('home-settings.edit');
        Route::put('/home-page-settings', [HomePageSettingController::class, 'update'])->name('home-settings.update');
        Route::post('/home-page-settings/hero-slides', [HomePageSettingController::class, 'createSlide'])->name('home-settings.slides.create');
        Route::delete('/home-page-settings/hero-slides/{heroSlide}', [HomePageSettingController::class, 'destroySlide'])->name('home-settings.slides.destroy');
        Route::get('/contact-settings', [ContactSettingController::class, 'edit'])->name('contact-settings.edit');
        Route::put('/contact-settings', [ContactSettingController::class, 'update'])->name('contact-settings.update');
        Route::get('/attorneys/create', [AttorneyController::class, 'create'])->name('attorneys.create');
        Route::post('/attorneys', [AttorneyController::class, 'store'])->name('attorneys.store');
        Route::get('/attorneys/{attorney}/edit', [AttorneyController::class, 'edit'])->name('attorneys.edit');
        Route::put('/attorneys/{attorney}', [AttorneyController::class, 'update'])->name('attorneys.update');
        Route::delete('/attorneys/{attorney}', [AttorneyController::class, 'destroy'])->name('attorneys.destroy');
        Route::get('/capabilities', [CapabilityController::class, 'index'])->name('capabilities.index');
        Route::post('/capabilities', [CapabilityController::class, 'store'])->name('capabilities.store');
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');
    });
});
