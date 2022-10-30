<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoices extends Model
{
    use HasFactory;

    protected $fillable = ['client_id', 'invoice_number', 'invoice_date', 'po_number', 'amount', 'balance', 'due_date', 
        'deposit_amount','discount', 'discount_type','private_notes','status'
    ];
    public function client()
    {
        return $this->belongsTo('App\Models\Clients');

    }
    public function products()
    {
        return $this->hasMany('App\Models\Products');

    }
    public function payments()
    {
        return $this->hasMany('App\Models\Payments');

    }
}
