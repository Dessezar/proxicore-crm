<?php

namespace Database\Factories;

use App\Enums\CustomerType;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    protected $model = Customer::class;
    
    public function definition(): array
    {

        return [
            'name' => $this->faker->company(),
            'type' => $this->faker->randomElement(CustomerType::cases()),
        ];
    }
}
