<?php

namespace Database\Factories;

use App\Models\Receptionist;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReceptionistFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Receptionist::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'document' => $this->faker->unique()->numberBetween(0,1000000000),
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'observation' => $this->faker->text
        ];
    }
}
