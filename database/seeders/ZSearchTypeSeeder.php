<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ZSearchTypeSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('z_search_type')->insert([
            ['search_type_id' => 1, 'cloud_id' => 0, 'search_type' => 'Traditional', 'is_visible' => 'Yes', 'is_hidden' => '0', 'source' => 'Global', 'date' => '2023-01-28', 'time' => '09:15:23 pm', 'created_at' => $now, 'updated_at' => $now],
            ['search_type_id' => 2, 'cloud_id' => 0, 'search_type' => 'Temporary', 'is_visible' => 'Yes', 'is_hidden' => '0', 'source' => 'Global', 'date' => '2023-01-28', 'time' => '09:15:23 pm', 'created_at' => $now, 'updated_at' => $now],
            ['search_type_id' => 3, 'cloud_id' => 0, 'search_type' => 'Contigency', 'is_visible' => 'Yes', 'is_hidden' => '0', 'source' => 'Global', 'date' => '2023-01-28', 'time' => '09:15:23 pm', 'created_at' => $now, 'updated_at' => $now],
            ['search_type_id' => 4, 'cloud_id' => 0, 'search_type' => 'Executive', 'is_visible' => 'Yes', 'is_hidden' => '0', 'source' => 'Global', 'date' => '2023-01-28', 'time' => '09:15:23 pm', 'created_at' => $now, 'updated_at' => $now],
            ['search_type_id' => 5, 'cloud_id' => 0, 'search_type' => 'Retained', 'is_visible' => 'Yes', 'is_hidden' => '0', 'source' => 'Global', 'date' => '2023-01-28', 'time' => '09:15:23 pm', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
