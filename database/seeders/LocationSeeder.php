<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Load csv file, parse data, and save to database
        $csv = database_path('csv/data.csv');
        $data = array_map('str_getcsv', file($csv));

        $locations = [];

        foreach ($data as $row) {
            $location = [
                'name' => $row[0],
                'latitude' => $row[1],
                'longitude' => $row[2],
                'created_at' => now(),
                'updated_at' => now(),
            ];
            
            $locations[] = $location;
        }

        DB::table('locations')->insert($locations);
    }
}
