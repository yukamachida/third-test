<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(35)->create([
            'name' => '太郎',
            'email' => 'tarotaro@gmail.com',
            'password' => bcrypt('password123'),
        ]);
    }
}
