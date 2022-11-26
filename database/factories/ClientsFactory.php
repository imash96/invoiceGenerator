<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clients>
 */
class ClientsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'business_name' => fake()->company(),
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'email_address' => fake()->unique()->safeEmail(),
            'phone_number' => fake()->phoneNumber(),
            'address_street1' => fake()->streetAddress(),
            'address_street2' => fake()->streetName(),
            'address_city' => fake()->city(),
            'address_state' => fake()->state(),
            'address_zipcode' => fake()->postcode(),
            'gstin' => fake()->regexify('[0-2]{2}[A-Z]{5}[0-4]{4}[A-Z]{1}[0-4]{1}[A-Z]{2}')
        ];
    }
}
