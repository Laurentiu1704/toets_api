<?php

namespace Database\Factories;

use App\Models\Docent;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vak>
 */
class VakFactory extends Factory
{
    public function definition()
    {
        return [
            'naam' => $this->faker->word,
            'beschrijving' => $this->faker->sentence,
            'docent_id' => Docent::factory(),
        ];
    }
}
