<h2>Invoice #{{ $invoice->invoice_number }}</h2>
<p><strong>Name:</strong> {{ $invoice->customer_name }}</p>
<p><strong>Email:</strong> {{ $invoice->customer_email }}</p>
<p><strong>Date:</strong> {{ $invoice->invoice_date }}</p>
<p><strong>Total:</strong> ${{ $invoice->total_amount }}</p>

<a href="{{ route('invoices.print', $invoice->id) }}" target="_blank">Print Invoice</a>
