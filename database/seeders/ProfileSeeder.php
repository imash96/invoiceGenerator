<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Profile::factory()->create([
            'business_name' => 'Hywings Enterprises',
            'business_email' => 'hywingscorp@gmail.com',
            'business_phone_number' => '9867790931',
            'business_address_street1' => 'RM101 1st Floor, A29 Vindeshwari Bldg.',
            'business_address_street2' => '90 Feet Road Dharavi',
            'business_address_city' => 'Mumbai',
            'business_address_state' => 'Maharashtra',
            'business_address_zipcode' => '400017',
            'business_gstin' => '27BXJPA0596G1ZH',
            'business_website' => 'hywings.co.in',
            'business_header_img' => '/images/hywings_logo.jpg',
            'business_logo' => '/images/hywings_header.jpg',

        ]);
    }
}
