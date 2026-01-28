{
        $this->call(UsersTableSeeder::class);
        \App\Models\User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
=======
    public function run(): void
    {
        $this->call(UsersTableSeeder::class);
        $this->call(SiteSettingSeeder::class);
        \App\Models\User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
