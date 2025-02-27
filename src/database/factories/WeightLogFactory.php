<?php

namespace Database\Factories;

use App\Models\WeightLog;
use Illuminate\Database\Eloquent\Factories\Factory;

class WeightLogFactory extends Factory
{
    protected $model = WeightLog::class;
    public function definition()
    {
        return [
            'user_id' => 1,
            'date' => $this->faker->date,
            'weight' => $this->faker->numberBetween(1, 1000),
            'calories' => $this->faker->numberBetween(1, 5000),
            'exercise_time' => $this->faker->time(),
            'exercise_content' => $this->faker->text(100),
        ];
    }
}
