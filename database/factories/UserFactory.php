<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => 'seck',
            'prenom' => 'ndeye fatou',
            'email' => 'snde@gmail.com',
            'email_verified_at' => now(),
            'dateNaissance' => '2020-02-15',
            'nas' => '126652585',
            'adresse' => 'place beauchesne',
            'password' => bcrypt('passer'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
