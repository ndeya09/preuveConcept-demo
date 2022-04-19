<?php

namespace Database\Factories;

use App\Models\Declaration;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeclarationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Declaration::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->word,
        'annee' => $this->faker->randomDigitNotNull,
        'numeroCellulaire' => $this->faker->word,
        'numeroAppart' => $this->faker->randomDigitNotNull,
        'codePostal' => $this->faker->word,
        'ville' => $this->faker->word,
        'province' => $this->faker->word,
        'dateArrivCan' => $this->faker->word,
        'declarationAnnPrecedente' => $this->faker->word,
        'occupation' => $this->faker->word,
        'situationMatrimoniale' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
