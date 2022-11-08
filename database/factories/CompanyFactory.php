<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    protected $model = Company::class;
 
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'name'=>$this->fake()->name(),
            'description'=>$this->fake()->sentence()
        ];
    }
}
