<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\People;

class PeopleFactory extends Factory
{
    protected $model = People::class;

    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'phone_number' => $this->faker->phoneNumber,
            'street' => $this->faker->streetAddress,
            'city' => $this->faker->city,
        ];
    }
}