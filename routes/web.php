<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\PaymentController;

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

// Plans
Route::get('plans', [PlanController::class, 'index'])->name('plans.index');

// Paypal
Route::prefix('subscribe')
    ->name('subscribe.')
    ->group(function () {
        Route::get('', [SubscriptionController::class, 'show'])->name('show'); // suscribe.show
        Route::post('', [SubscriptionController::class, 'store'])->name('store');
        Route::get('appproval', [SubscriptionController::class, 'appproval'])->name('appproval');
        Route::get('cancelled', [SubscriptionController::class, 'cancelled'])->name('cancelled');
});

// Inertia
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
