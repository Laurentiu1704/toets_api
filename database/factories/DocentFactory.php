<?php

namespace Database\Factories;

use App\Models\Docent;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DocentFactory extends Factory
{
    protected $model = Docent::class;

    public function definition()
    {
        return [
            'naam' => $this->faker->name,
            'hobby' => $this->faker->word,
        ];
    }
}

