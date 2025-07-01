<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZTmpCitySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('z_tmp_city')->insert([
            ['tmp_city_id' => 1, 'tmp_name' => 'Madhubani', 'tmp_state_id' => 20, 'tmp_parent_country_id' => 1, 'tmp_country_code' => null, 'tmp_country_image' => null, 'cloud_id' => 1, 'user_id' => 1, 'status' => 'Approved', 'created_at' => now(), 'updated_at' => now()],
            ['tmp_city_id' => 2, 'tmp_name' => 'Balasore', 'tmp_state_id' => 36, 'tmp_parent_country_id' => 1, 'tmp_country_code' => null, 'tmp_country_image' => null, 'cloud_id' => 1, 'user_id' => 1, 'status' => 'Rejected', 'created_at' => now(), 'updated_at' => now()],
            ['tmp_city_id' => 3, 'tmp_name' => 'ss', 'tmp_state_id' => 33, 'tmp_parent_country_id' => 1, 'tmp_country_code' => null, 'tmp_country_image' => null, 'cloud_id' => 1, 'user_id' => 1, 'status' => 'Pending', 'created_at' => now(), 'updated_at' => now()],
            ['tmp_city_id' => 4, 'tmp_name' => 'Bharat', 'tmp_state_id' => 0, 'tmp_parent_country_id' => 0, 'tmp_country_code' => 23, 'tmp_country_image' => 'LSpyFJCCXe_2023_03_12_142753pm.JPG', 'cloud_id' => 1, 'user_id' => 1, 'status' => 'Pending', 'created_at' => now(), 'updated_at' => now()],
            ['tmp_city_id' => 5, 'tmp_name' => 'Fadsfasdfads', 'tmp_state_id' => 0, 'tmp_parent_country_id' => 0, 'tmp_country_code' => 12, 'tmp_country_image' => 'yc9x8Z0Lpopng', 'cloud_id' => 1, 'user_id' => 1, 'status' => 'Pending', 'created_at' => now(), 'updated_at' => now()],
            ['tmp_city_id' => 6, 'tmp_name' => 'Fadsfasdf', 'tmp_state_id' => 0, 'tmp_parent_country_id' => 0, 'tmp_country_code' => 11, 'tmp_country_image' => 'wlge3k4V07.png', 'cloud_id' => 1, 'user_id' => 1, 'status' => 'Pending', 'created_at' => now(), 'updated_at' => now()],
            ['tmp_city_id' => 7, 'tmp_name' => 'Mhmmhmbm', 'tmp_state_id' => 0, 'tmp_parent_country_id' => 0, 'tmp_country_code' => 13, 'tmp_country_image' => 'WOOeDMSHTf.png', 'cloud_id' => 1, 'user_id' => 1, 'status' => 'Pending', 'created_at' => now(), 'updated_at' => now()],
            ['tmp_city_id' => 8, 'tmp_name' => 'Akash', 'tmp_state_id' => null, 'tmp_parent_country_id' => 1, 'tmp_country_code' => null, 'tmp_country_image' => null, 'cloud_id' => 1, 'user_id' => 1, 'status' => 'Pending', 'created_at' => now(), 'updated_at' => now()],
            ['tmp_city_id' => 9, 'tmp_name' => 'Assas', 'tmp_state_id' => 19, 'tmp_parent_country_id' => 1, 'tmp_country_code' => null, 'tmp_country_image' => null, 'cloud_id' => 1, 'user_id' => 1, 'status' => 'Pending', 'created_at' => now(), 'updated_at' => now()],
            ['tmp_city_id' => 10, 'tmp_name' => 'Sdfasdadas', 'tmp_state_id' => 0, 'tmp_parent_country_id' => 0, 'tmp_country_code' => 13, 'tmp_country_image' => '42rOIVYYpu.png', 'cloud_id' => 1, 'user_id' => 1, 'status' => 'Pending', 'created_at' => now(), 'updated_at' => now()],
            ['tmp_city_id' => 11, 'tmp_name' => 'Gdfgdfgdfgdfg', 'tmp_state_id' => null, 'tmp_parent_country_id' => 1, 'tmp_country_code' => null, 'tmp_country_image' => null, 'cloud_id' => 1, 'user_id' => 1, 'status' => 'Pending', 'created_at' => now(), 'updated_at' => now()],
            ['tmp_city_id' => 12, 'tmp_name' => 'Fadsfasdf', 'tmp_state_id' => 0, 'tmp_parent_country_id' => 0, 'tmp_country_code' => 21, 'tmp_country_image' => 'fAgn9uKJGv.png', 'cloud_id' => 1, 'user_id' => 1, 'status' => 'Pending', 'created_at' => now(), 'updated_at' => now()],
            ['tmp_city_id' => 13, 'tmp_name' => 'Fasdfasdf', 'tmp_state_id' => null, 'tmp_parent_country_id' => 1, 'tmp_country_code' => null, 'tmp_country_image' => null, 'cloud_id' => 1, 'user_id' => 1, 'status' => 'Pending', 'created_at' => now(), 'updated_at' => now()],
            ['tmp_city_id' => 14, 'tmp_name' => 'Fsdfasdfasdf', 'tmp_state_id' => 17, 'tmp_parent_country_id' => 1, 'tmp_country_code' => null, 'tmp_country_image' => null, 'cloud_id' => 1, 'user_id' => 1, 'status' => 'Pending', 'created_at' => now(), 'updated_at' => now()],
            ['tmp_city_id' => 15, 'tmp_name' => 'Fsdasdfasdf', 'tmp_state_id' => 0, 'tmp_parent_country_id' => 0, 'tmp_country_code' => 12, 'tmp_country_image' => '8T6zUs9wNT.png', 'cloud_id' => 1, 'user_id' => 1, 'status' => 'Pending', 'created_at' => now(), 'updated_at' => now()],
            ['tmp_city_id' => 16, 'tmp_name' => 'ChandigarhUT', 'tmp_state_id' => null, 'tmp_parent_country_id' => 100, 'tmp_country_code' => null, 'tmp_country_image' => null, 'cloud_id' => 1, 'user_id' => 1, 'status' => 'Pending', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
