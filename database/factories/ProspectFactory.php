<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Prospect;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prospect>
 */
class ProspectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Prospect::class;

    /**
     * Define the model's default state.
     *
     * @return array <string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'lastname' => $this->faker->lastName(),
            'legal_name' => $this->faker->company(),
            'rfc_nrif' => $this->faker->creditCardNumber(),
            'fiscal_address' => $this->faker->streetAddress(),
            'email' => $this->faker->email(),
            'phone_number' => $this->faker->phoneNumber(),
            'status' => $this->faker->randomNumber(),
            'country' => $this->faker->country(),
            'description' => $this->faker->sentence(),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime()
        ];
    }
}
