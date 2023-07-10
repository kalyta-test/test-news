<?php

namespace Database\Factories;


use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'status' => Category::STATUS_ACTIVE,
            'created_at' => Carbon::now()->subHour(),
            'updated_at' => Carbon::now()->timestamp,
        ];
    }
}
