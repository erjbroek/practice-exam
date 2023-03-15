<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Foo>
 */
class FooFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'thud' => $this->faker->numberBetween(0, 999),
            'wombat' => $this->faker->boolean(),
            'skwal' => Post::all()->random()->id

        ];
    }
}
