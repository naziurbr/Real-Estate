<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SiteSetting>
 */
class SiteSettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'logo' => 'upload/logo.png',
            'support_phone' => '0123456789',
            'company_address' => $this->faker->address(),
            'email' => 'info@realestate.com',
            'facebook' => 'https://facebook.com/realestate',
            'twitter' => 'https://twitter.com/realestate',
            'copyright' => '© 2024 Real Estate. All Rights Reserved.',
        ];
    }
}