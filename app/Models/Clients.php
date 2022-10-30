<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;

    protected $fillable = ['business_name', 'first_name', 'last_name', 'email_address', 'phone_number', 'address_street',
        'address_street2', 'address_city', 'address_state', 'address_zipcode', 'tax_rate', 'private_notes'
    ];

    public function invoices()
    {
        return $this->hasMany('App\Models\Invoices');

    }
    public function payments()
    {
        return $this->hasMany('App\Models\Payments');

    }
}
