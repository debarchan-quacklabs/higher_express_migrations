<?php

namespace Database\Seeders;


use App\Models\ZZone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       ZZone::insert([
            ['zone_id' => 1, 'zone_name' => 'East'],
            ['zone_id' => 2, 'zone_name' => 'West'],
            ['zone_id' => 3, 'zone_name' => 'South'],
            ['zone_id' => 4, 'zone_name' => 'North'],
            ['zone_id' => 5, 'zone_name' => 'North East'],
            ['zone_id' => 6, 'zone_name' => 'All Union Territories'],
        ]);
    }
}
