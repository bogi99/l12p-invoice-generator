<?php

use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pageHome');
});

Route::resource('invoices', InvoiceController::class);