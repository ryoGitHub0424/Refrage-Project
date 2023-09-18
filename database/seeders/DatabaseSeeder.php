<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'name' => 'ryo kaneko',
            'email' => 'ryokaneko@test.com',
            'password' => 'password',
            ]);
            
        \App\Models\ArcReference::factory(10)->create([
            'user_id' => $user->id,
            ]);
        \App\Models\ArtReference::factory(10)->create([
            'user_id' => $user->id
            ]);
        \App\Models\ArcPortfolio::factory(10)->create([
            'user_id' => $user->id,
            'user_name' => $user->name
            ]);
        \App\Models\ArtPortfolio::factory(10)->create([
            'user_id' => $user->id,
            'user_name' => $user->name
            ]);
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
