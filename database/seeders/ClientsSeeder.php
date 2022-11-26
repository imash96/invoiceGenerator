<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Clients;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Clients::factory(30)->create();
        
        Clients::factory()->create([
            'business_name' => 'Hywings Enterprises',
            'first_name' => 'Arbaz',
            'last_name' => 'Shaikh',
            'email_address' => 'hywingscorp@gmail.com',
            'phone_number' => '9867790931',
            'address_street1' => 'RM101 1st Floor, A29 Vindeshwari Bldg.',
            'address_street2' => '90 Feet Road Dharavi',
            'address_city' => 'Mumbai',
            'address_state' => 'Maharashtra',
            'address_zipcode' => '400017',
            'gstin' => '27BXJPA0596G1ZH'
        ]);
    }
}
