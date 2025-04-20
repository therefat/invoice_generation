<form action="{{ route('invoices.store') }}" method="POST">
    @csrf
    <input type="text" name="customer_name" placeholder="Customer Name" required>
    <input type="email" name="customer_email" placeholder="Customer Email">
    <input type="date" name="invoice_date" required>
    <input type="number" name="total_amount" placeholder="Total Amount" required>
    <button type="submit">Create Invoice</button>
</form>
