<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoices extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_number', 'invoice_date', 'pos_id', 'challan_number', 'lr_number', 'ewaybill_number', 'pace_of_supply', 'client_id',
        'products', 'gst_type', 'freight_charges', 'insurance_charges', 'packnforward_charges', 'amount', 'balance', 'due_date',
        'deposit_amount', 'status'
    ];

    public function client()
    {
        return $this->belongsTo('App\Models\Clients', 'client_id', 'id');
    }

    public function products()
    {
        return $this->hasMany('App\Models\Products', 'id');
    }

    public function payments()
    {
        return $this->hasMany('App\Models\Payments', 'id');
    }
}
