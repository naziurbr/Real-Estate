<?php

namespace Database\Factories;

use App\Models\Amenities;
use App\Models\PropertyType;
use App\Models\State;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PropertyFactory extends Factory
{
    public function definition(): array
    {
        $property_name = $this->faker->sentence(3);
        
        return [
            'ptype_id' => PropertyType::inRandomOrder()->first()->id ?? 1,
            'amenities_id' => implode(',', Amenities::pluck('id')->random(min(3, Amenities::count() ?: 1))->toArray()),
            'property_name' => $property_name,
            'property_slug' => Str::slug($property_name),
            'property_code' => 'PC' . $this->faker->unique()->numberBetween(1000, 9999),
            'property_status' => $this->faker->randomElement(['buy', 'rent']),
            
            'lowest_price' => (string)$this->faker->numberBetween(100000, 500000),
            'maximum_price' => (string)$this->faker->numberBetween(500001, 1000000),
            'property_thumbnail' => 'uploads/property/default.jpg', // Placeholder string
            
            'short_desc' => $this->faker->paragraph(),
            'long_desc' => $this->faker->text(500),
            'bedrooms' => (string)$this->faker->numberBetween(1, 6),
            'bathrooms' => (string)$this->faker->numberBetween(1, 4),
            'garage' => (string)$this->faker->numberBetween(0, 2),
            'garage_size' => (string)$this->faker->numberBetween(20, 50) . ' sqft',
            'property_size' => (string)$this->faker->numberBetween(100, 2000),
            
            'property_video' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'state' => State::inRandomOrder()->first()->id ?? null, // Match logic if state table is used
            'postal_code' => $this->faker->postcode(),
            'neighborhood' => $this->faker->streetName(),
            
            'latitude' => (string)$this->faker->latitude(),
            'longitude' => (string)$this->faker->longitude(),
            'featured' => (string)$this->faker->numberBetween(0, 1),
            'hot' => (string)$this->faker->numberBetween(0, 1),
            'agent_id' => User::where('role', 'agent')->inRandomOrder()->first()->id ?? 1,
            'status' => '1',
        ];
    }
}