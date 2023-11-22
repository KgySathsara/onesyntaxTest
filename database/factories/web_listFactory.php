<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class web_listFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->uuid,
            'website_name'=> $this -> faker -> domainName,
            'website_url'=> $this -> faker -> url,
            'subscribe_user'=>$this ->faker ->uuid,
            'post_id'=>$this->faker->uuid
        ];
    }
}
