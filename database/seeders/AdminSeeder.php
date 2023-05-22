<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::upsert([
            [
                'first_name' => 'Admin',
                'last_name' => 'User',
                'email' => 'admin@uniwolc.com',
            ],
        ], 'email');
    }
}
