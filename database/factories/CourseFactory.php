<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'title'=>$this->faker->word,
            'slug'=>$this->faker->slug,
            'image'=>$this->faker->imageUrl(1280,720),
            'description'=>$this->faker->text(500),

            'user_id'=>rand(1,5),
            'category_id'=>rand(1,3)
        ];
    }
}
