<?php

use App\Http\Controllers\ClientsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShortUrlController;
use App\Http\Controllers\InviteController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::post('/invite', [InviteController::class, 'invite'])->name('invite');

    Route::get('/clients', [ClientsController::class, 'index'])->name('client');
    Route::get('/short-urls', [ShortUrlController::class, 'index'])->name('short-urls.index');
    Route::post('/short-urls', [ShortUrlController::class, 'store'])->name('short-urls.store');
});
Route::get('/{shortCode}', [ShortUrlController::class, 'redirect'])->name('short-url.redirect');
