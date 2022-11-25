<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InvoiceController;

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

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('clients', ClientController::class);
});

Route::get('/', [DashboardClientController::class, 'index'])->name('dashboard-client.index');
Route::get('getinvoiceinfo', [InvoiceController::class, 'getInvoiceInfo'])->name('invoices.getinvoiceinfo');

// Route::get('dashboard', [DashboardController::class, 'index']);