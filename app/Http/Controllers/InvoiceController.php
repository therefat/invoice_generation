<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    //

    public function index()
    {
        $invoices = Invoice::latest()->get();
        return view('invoices.index', compact('invoices'));
    }

    public function create()
    {
        return view('invoices.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'customer_email' => 'nullable|email',
            'invoice_date' => 'required|date',
            'total_amount' => 'required|numeric',
        ]);

        $invoice = Invoice::create([
            'invoice_number' => 'INV-' . time(),
            'customer_name' => $request->customer_name,
            'customer_email' => $request->customer_email,
            'invoice_date' => $request->invoice_date,
            'total_amount' => $request->total_amount,
        ]);

        return redirect()->route('invoices.show', $invoice->id);
    }

    public function show($id)
    {
        $invoice = Invoice::findOrFail($id);
        return view('invoices.show', compact('invoice'));
    }

    public function print($id)
    {
        $invoice = Invoice::findOrFail($id);
        return view('invoices.print', compact('invoice'));
    }
}
