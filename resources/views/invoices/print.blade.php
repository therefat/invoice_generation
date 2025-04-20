<!DOCTYPE html>
<html>
<head>
    <title>Print Invoice</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        .invoice-box { border: 1px solid #eee; padding: 30px; width: 100%; }
        .print-button { margin-bottom: 20px; }
    </style>
</head>
<body>
    <div class="print-button">
        <button onclick="window.print()">🖨️ Print</button>
    </div>
    <div class="invoice-box">
        <h1>Invoice #{{ $invoice->invoice_number }}</h1>
        <p><strong>Name:</strong> {{ $invoice->customer_name }}</p>
        <p><strong>Email:</strong> {{ $invoice->customer_email }}</p>
        <p><strong>Date:</strong> {{ $invoice->invoice_date }}</p>
        <p><strong>Total:</strong> ${{ $invoice->total_amount }}</p>
    </div>
</body>
</html>
