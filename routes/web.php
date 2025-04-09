<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\InvoiceItemsController;

Route::get('/', function () {
    return view('pageHome');
});

Route::resource('invoices', InvoiceController::class);

// Route::get('/invoices/{invoiceId}/items', [InvoiceItemsController::class, 'index']);
Route::resource('invoices.items', InvoiceItemsController::class)->shallow();