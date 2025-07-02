<?php

namespace Database\Seeders;

use App\Models\ZEducationMedia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import DB facade

class ZEducationMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ZEducationMedia::table('z_education_media')->insert([
            [
                'medium_id' => 1,
                'medium_name' => 'Assamese / Asomiya',
                'created_at' => '2022-04-20 06:23:37',
                'updated_at' => '2022-04-20 06:23:37',
            ],
            [
                'medium_id' => 2,
                'medium_name' => 'Bengali / Bangla',
                'created_at' => '2022-04-20 06:23:37',
                'updated_at' => '2022-04-20 06:23:37',
            ],
            [
                'medium_id' => 3,
                'medium_name' => 'English',
                'created_at' => '2022-04-20 06:23:37',
                'updated_at' => '2022-04-20 06:23:37',
            ],
            [
                'medium_id' => 4,
                'medium_name' => 'Gujarati',
                'created_at' => '2022-04-20 06:23:37',
                'updated_at' => '2022-04-20 06:23:37',
            ],
            [
                'medium_id' => 5,
                'medium_name' => 'Hindi',
                'created_at' => '2022-04-20 06:23:37',
                'updated_at' => '2022-04-20 06:23:37',
            ],
            [
                'medium_id' => 6,
                'medium_name' => 'Kannada',
                'created_at' => '2022-04-20 06:23:37',
                'updated_at' => '2022-04-20 06:23:37',
            ],
            [
                'medium_id' => 7,
                'medium_name' => 'Kashmiri',
                'created_at' => '2022-04-20 06:23:37',
                'updated_at' => '2022-04-20 06:23:37',
            ],
            [
                'medium_id' => 8,
                'medium_name' => 'Konkani',
                'created_at' => '2022-04-20 06:23:37',
                'updated_at' => '2022-04-20 06:23:37',
            ],
            [
                'medium_id' => 9,
                'medium_name' => 'Malayalam',
                'created_at' => '2022-04-20 06:23:37',
                'updated_at' => '2022-04-20 06:23:37',
            ],
            [
                'medium_id' => 10,
                'medium_name' => 'Manipuri',
                'created_at' => '2022-04-20 06:23:37',
                'updated_at' => '2022-04-20 06:23:37',
            ],
            [
                'medium_id' => 11,
                'medium_name' => 'Marathi',
                'created_at' => '2022-04-20 06:23:37',
                'updated_at' => '2022-04-20 06:23:37',
            ],
            [
                'medium_id' => 12,
                'medium_name' => 'Oriya',
                'created_at' => '2022-04-20 06:23:37',
                'updated_at' => '2022-04-20 06:23:37',
            ],
            [
                'medium_id' => 13,
                'medium_name' => 'Punjabi',
                'created_at' => '2022-04-20 06:23:37',
                'updated_at' => '2022-04-20 06:23:37',
            ],
            [
                'medium_id' => 14,
                'medium_name' => 'Sanskrit',
                'created_at' => '2022-04-20 06:23:37',
                'updated_at' => '2022-04-20 06:23:37',
            ],
            [
                'medium_id' => 15,
                'medium_name' => 'Tamil',
                'created_at' => '2022-04-20 06:23:37',
                'updated_at' => '2022-04-20 06:23:37',
            ],
            [
                'medium_id' => 16,
                'medium_name' => 'Telugu',
                'created_at' => '2022-04-20 06:23:37',
                'updated_at' => '2022-04-20 06:23:37',
            ],
            [
                'medium_id' => 17,
                'medium_name' => 'Urdu',
                'created_at' => '2022-04-20 06:23:37',
                'updated_at' => '2022-04-20 06:23:37',
            ],
            [
                'medium_id' => 18,
                'medium_name' => 'Other',
                'created_at' => '2022-04-20 06:23:37',
                'updated_at' => '2022-04-20 06:23:37',
            ],
        ]);
    }
}
