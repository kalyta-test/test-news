<?php

namespace Database\Factories;

use App\Models\News;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    protected $model = News::class;

    public function definition()
    {
        return [
            'header' => $this->faker->text(10),
            'text' => $this->faker->text(),
            'publicationDate' => $this->faker->date,
            'status' => News::STATUS_INACTIVE,
            'previewImage' => $this->faker->text(20),
            'created_at' => Carbon::now()->subHour(),
            'updated_at' => Carbon::now()->timestamp,
        ];
    }
}
