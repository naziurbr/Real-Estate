<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Property;
use App\Models\MultiImage;
use App\Models\Facility;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Create your Admin/Agents from your manual seeder
        $this->call([
            UsersTableSeeder::class,
        ]);

        // 2. Create Independent Data
        User::factory(10)->create(); 
        \App\Models\PropertyType::factory(5)->create();
        \App\Models\Amenities::factory(10)->create();
        \App\Models\State::factory(8)->create();
        \App\Models\BlogCategory::factory(5)->create();
        \App\Models\Testimonial::factory(5)->create();
        \App\Models\SmtpSetting::factory(1)->create();
        \App\Models\SiteSetting::factory(1)->create();

        // 3. Create Main Content
        Property::factory(20)->create();
        \App\Models\BlogPost::factory(10)->create();

        // 4. THE LOOP: This handles MultiImage and Facility correctly
        Property::all()->each(function ($property) {
            MultiImage::factory(3)->create([
                'property_id' => $property->id,
            ]);

            Facility::factory(2)->create([
                'property_id' => $property->id,
            ]);
        });

        // 5. Create Remaining Dependent Data
        \App\Models\PackagePlan::factory(5)->create();
        \App\Models\Wishlist::factory(15)->create();
        \App\Models\Compare::factory(10)->create();
        \App\Models\PropertyMessage::factory(15)->create();
        \App\Models\Comment::factory(25)->create();
        \App\Models\Schedule::factory(10)->create();
        \App\Models\ChatMessage::factory(40)->create();
    }
}