<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $data = Invoice::all();
        $data = Invoice::withCount('items')->get();
        
        // dd($data);
        return view('invoices.index', [ 'data' => $data ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('invoices.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'num' => ['required'],
            'title' => ['required'],
            'from' => ['required'],
            'to' => ['required'],
        ]);

        $data = new Invoice;
        $data->create($request->all());
        return redirect()->route('invoices.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invoice $invoice)
    {
        //
        // dd($invoice->id);
        $item = Invoice::destroy($invoice->id);
        return redirect()->route('invoices.index')->with('success', "Invoice Deleted");

    }
}
