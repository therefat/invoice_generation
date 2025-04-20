<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'invoice_number',
        'customer_name',
        'customer_email',
        'invoice_date',
        'total_amount',
    ];
}
