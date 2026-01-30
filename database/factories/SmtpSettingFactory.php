<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SmtpSetting>
 */
class SmtpSettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'mailer' => 'smtp',
            'host' => 'mailpit', // Matches your .env
            'port' => '1025',    // Matches your .env
            'user_name' => '7f8fa9a1c1676c',
            'password' => '413e88e193ab60',
            'encryption' => 'null',
            'from_address' => 'hello@example.com',
        ];
    }
}