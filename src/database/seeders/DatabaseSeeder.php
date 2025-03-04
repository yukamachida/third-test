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
        \App\Models\User::create(
            [
                'name' => '太郎',
                'email' => 'tarotaro@example.com',
                'password' => bcrypt('password123'),
            ]
        );
        ([
            'name' => '太郎2',
            'email' => 'tarotaro@example.com',
            'password' => bcrypt('password123'),
        ]);
        ([
            'name' => '太郎3',
            'email' => 'tarotaro@example.com',
            'password' => bcrypt('password123'),
        ]);
        ([
            'name' => '太郎4',
            'email' => 'tarotaro@example.com',
            'password' => bcrypt('password123'),
        ]);

    }
}
