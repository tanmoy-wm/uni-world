<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::upsert([
            [
                'first_name' => 'Admin',
                'last_name' => 'User',
                'email' => 'admin@uniwolc.com',
                'password' => bcrypt('admin@1234'),
                'profile_type' => 'App\\Models\\Admin',
                'profile_id' => 1,
                'is_active' => true
            ],
        ], 'email');
    }
}
