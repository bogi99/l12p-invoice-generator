<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\InvoiceItems;
use Illuminate\Http\Request;

class InvoiceItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($invoiceId)
    {
        //
        $invoice = Invoice::with('items')->findOrFail($invoiceId);
        return view('invoice_items.index', compact('invoice'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(InvoiceItems $invoiceItems)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InvoiceItems $invoiceItems)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InvoiceItems $invoiceItems)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InvoiceItems $invoiceItems)
    {
        //
        $invoiceItems->delete();
        return redirect()->back()->with('success', 'Item deleted');
    }
}
