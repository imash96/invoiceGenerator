<?php

use Illuminate\Support\Facades\Route;
use App\customCodes\invoiceGenerator;
use App\customCodes\qrcodeGenerator;
use App\customCodes\numberToWord;

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\POsController;
use App\Http\Controllers\ProductsController;

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

Route::get('/invoice', function () {
    return view('newInvoice');
});

Route::get('/invoice-generate', [invoiceGenerator::class, 'index']);

Route::get('/qrcode-generate', [qrcodeGenerator::class, 'index']);

Route::get('/word/{number}', [numberToWord::class, 'getIndianCurrency']);


Route::resources([
    'invoices' => InvoicesController::class,
    'clients' => ClientsController::class,
    'payments' => PaymentsController::class,
    'pos' => POsController::class,
    'products' => ProductsController::class,
]);