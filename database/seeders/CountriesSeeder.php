<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesSeeder extends Seeder
{
    const TABLE_NAME = 'countries';
    public $db_seeder;

    public function __construct()
    {
        $this->db_seeder = new DatabaseSeeder();
    }

    public function run(): void
    {
        DB::table(self::TABLE_NAME)->truncate();
        $this->seed();
    }

    public function seed(): void
    {
        $file_name = 'countries.json';
        $countries = $this->db_seeder->getDataFromJSON($file_name);

        foreach ($countries as $country) {
            if ($this->recordExists(self::TABLE_NAME, $country)) {
                continue;
            }
            DB::table(self::TABLE_NAME)->insert($country);
        }
    }

    public function recordExists($table_name, $country): bool
    {
        $exists = DB::table($table_name)->where($country)->get();
        return count($exists) > 0 ? true : false;
    }
}
