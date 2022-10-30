<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;
    
    protected $fillable = ['client_id',
        'invoice_id', 'payment_amount',
        'payment_type', 'payment_date', 'transaction_reference',
        'private_notes', 'status'
    ];

    public function invoice()
    {
        return $this->belongsTo('App\Models\Invoices');

    }
    public function client()
    {
        return $this->belongsTo('App\Models\Clients');

    }
}
