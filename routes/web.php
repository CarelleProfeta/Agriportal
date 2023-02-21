<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Auth\RedirectAuthenticatedUsersController;

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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::redirect('/', 'login');

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['middleware' => 'auth'], function() {
    Route::inertia('/dashboard', 'Dashboard')->name('dashboard');

    Route::get("/redirectAuthenticatedUsers", [RedirectAuthenticatedUsersController::class, "home"]);

    Route::group(['middleware' => 'checkRole:admin'], function() {
        Route::inertia('/adminDashboard', 'AdminDashboard')->name('adminDashboard');
        Route::inertia('/UserAccounts', 'UserAccounts')->name('pages.user_acc');
        Route::inertia('/Documents', 'Documents')->name('pages.docs');
        Route::inertia('/AdminWebinars', 'AdminWebinar')->name('pages.webinars');
        Route::post('logout', [\App\Http\Controllers\Auth\LoginController::class, 'destroy'])->name('logout');
    });
    Route::group(['middleware' => 'checkRole:user'], function() {
        Route::inertia('/userDashboard', 'UserDashboard')->name('userDashboard');
        Route::inertia('/Profile', 'UserProfile')->name('pages.user_profile');
        Route::inertia('/Email', 'Email')->name('pages.email');
        Route::inertia('/DigitalLibrary', 'DigitalLibrary')->name('pages.dig_lib');
        Route::inertia('/Projects', 'Projects')->name('pages.projects');
        Route::inertia('/Webinars', 'UserWebinar')->name('pages.webinar');
        Route::inertia('/Newsletters', 'Newsletter')->name('pages.newsletters');
        Route::inertia('/Members', 'Members')->name('pages.members');
        Route::post('logout', [\App\Http\Controllers\Auth\LoginController::class, 'destroy'])->name('logout');
        // Route::inertia('/Sample', 'sample')->name('pages.sample');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
