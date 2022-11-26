<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_id',
        'item_name', 'item_description', 'unit_cost',
        'quantity', 'line_total',
    ];

    public function invoice()
    {
        return $this->belongsTo('App\Models\Invoices');
    }
}
