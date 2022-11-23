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

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', [DashboardController::class, 'index']);

Route::get('dashboard_client', [DashboardClientController::class, 'index'])->name('dashboard-client.index');

Route::resource('clients', ClientController::class);

Route::get('getinvoiceinfo', [InvoiceController::class, 'getInvoiceInfo'])->name('invoices.getinvoiceinfo');