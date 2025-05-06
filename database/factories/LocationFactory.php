<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Location>
 */
class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'vehicule_id' => 0, // This should be replaced with a valid vehicule ID from the database
            'email' => $this->faker->unique()->safeEmail(),
            'nom_prenom' => $this->faker->name(),
            'addresse' => $this->faker->address(),
            'date_retour' => $this->faker->dateTimeBetween('+1 week', '+1 month'),
        ];
    }
}
