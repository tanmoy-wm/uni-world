<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            UserSeeder::class,
            CountriesSeeder::class,
        ]);
    }

    public function getDataFromJSON($json_file_name): mixed
    {
        $json_file = __DIR__ . "/json/" . $json_file_name;
        $json_string = file_get_contents($json_file);
        $data = json_decode($json_string, true);

        return $data;
    }
}
