<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SummaryController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);


Route::get('/search', function () {
    return view('search');
})->name('search');

use App\Http\Controllers\CarController;

Route::get('/cars', [CarController::class, 'index'])->name('cars');
Route::get('/cars-list', [CarController::class, 'carlist'])->name('carlist');

Route::get('/customers', function () {
    return view('customers');
})->name('customers');

Route::get('/suppliers', function () {
    return view('suppliers');
})->name('suppliers');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/purchaseInvoicesList', [CustomerController::class, 'purchaseInvoicesList'])->name('purchaseInvoicesList');
Route::get('/get-users', [CarController::class, 'getUsers'])->name('get-users');
Route::post('/store-car',[CarController::class,'store'])->name('cars.store');
Route::get('/get-customers', [CustomerController::class, 'getCustomers'])->name('get-Customers');
Route::get('/get-suppliers', [CustomerController::class, 'getSuppliers'])->name('get-suppliers');
Route::get('/get-saleInvoices', [CustomerController::class, 'saleInvoices'])->name('get-saleInvoices');
Route::get('/customer-reports', [CustomerController::class, 'customerReports'])->name('customer-reports');
Route::get('/get-suppliers-invoice/{id}', [CustomerController::class, 'getSuppliersInvoices'])->name('get-suppliers-Invoices');
Route::get('/get-SaleInvoices/{id}', [CustomerController::class, 'SaleInvoicesDetail'])->name('get-SaleInvoices-Invoices');
Route::get('/get-listSaleInvoices', [CustomerController::class, 'listSaleInvoices'])->name('get-listSale-Invoices');
Route::get('/get-listPurchase-Invoices', [CustomerController::class, 'listPurchaseInvoices'])->name('purchase-invoices.list');
Route::get('/summary-report', [SummaryController::class, 'index'])->name('report-summary');
Route::post('/summary-report', [SummaryController::class, 'create']);
Route::post('/customer-Report', [SummaryController::class, 'reportSummary'])->name('customer.reports');

Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');

use App\Http\Controllers\SearchController;

Route::get('/search', [SearchController::class, 'index'])->name('search.index');
Route::get('/search/data', [SearchController::class, 'getData'])->name('search.data');





