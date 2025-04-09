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
        // $data = Invoice::withCount('items')->get();
        $data = Invoice::withCount('items')->paginate(40);
        // dd($data);
        return view('invoices.index', ['data' => $data]);
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
        $pullNewInvoiceNumber = app(\App\Logic\PullNewInvoiceNumber::class);
        $request->merge(['num' => $pullNewInvoiceNumber->getNum()]);
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
        $data = Invoice::find($invoice->id);
        return view('invoices.update', ['invoice' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Invoice $invoice)
    {
        $validated = $request->validate(['num' => ['required'], 'title' => ['required'], 'from' => ['required'], 'to' => ['required']]);
        $invoice->update($validated);
        return redirect()->route('invoices.index')->with('success', 'Invoice updated');
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
