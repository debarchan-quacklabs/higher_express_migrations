<?php

namespace Database\Seeders;

use App\Models\ZXXiiEducation;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ZXxiiEducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          $data = [
            ['edu_id' => 1, 'edu_name' => 'All India', 'state_name' => '', 'edu_parent_id' => '0'],
            ['edu_id' => 2, 'edu_name' => 'State Boards', 'state_name' => '', 'edu_parent_id' => '0'],
            ['edu_id' => 3, 'edu_name' => 'CBSE', 'state_name' => '', 'edu_parent_id' => '1'],
            ['edu_id' => 4, 'edu_name' => 'CISCE(ICSE/ISC)', 'state_name' => '', 'edu_parent_id' => '1'],
            ['edu_id' => 5, 'edu_name' => 'Diploma', 'state_name' => '', 'edu_parent_id' => '1'],
            ['edu_id' => 6, 'edu_name' => 'National Open School', 'state_name' => '', 'edu_parent_id' => '1'],
            ['edu_id' => 8, 'edu_name' => 'Andhra Pradesh', 'state_name' => '', 'edu_parent_id' => '2'],
            ['edu_id' => 9, 'edu_name' => 'Assam', 'state_name' => '', 'edu_parent_id' => '2'],
            ['edu_id' => 10, 'edu_name' => 'Bihar', 'state_name' => '', 'edu_parent_id' => '2'],
            ['edu_id' => 11, 'edu_name' => 'Goa', 'state_name' => '', 'edu_parent_id' => '2'],
            ['edu_id' => 12, 'edu_name' => 'Gujarat', 'state_name' => '', 'edu_parent_id' => '2'],
            ['edu_id' => 13, 'edu_name' => 'Haryana', 'state_name' => '', 'edu_parent_id' => '2'],
            ['edu_id' => 14, 'edu_name' => 'Himachal Pradesh', 'state_name' => '', 'edu_parent_id' => '2'],
            ['edu_id' => 15, 'edu_name' => 'Jammu & Kashmir', 'state_name' => '', 'edu_parent_id' => '2'],
            ['edu_id' => 16, 'edu_name' => 'Karnataka', 'state_name' => '', 'edu_parent_id' => '2'],
            ['edu_id' => 17, 'edu_name' => 'Kerala', 'state_name' => '', 'edu_parent_id' => '2'],
            ['edu_id' => 18, 'edu_name' => 'Maharashtra', 'state_name' => '', 'edu_parent_id' => '2'],
            ['edu_id' => 19, 'edu_name' => 'Madhya Pradesh', 'state_name' => '', 'edu_parent_id' => '2'],
            ['edu_id' => 20, 'edu_name' => 'Manipur', 'state_name' => '', 'edu_parent_id' => '2'],
            ['edu_id' => 21, 'edu_name' => 'Meghalaya', 'state_name' => '', 'edu_parent_id' => '2'],
            ['edu_id' => 22, 'edu_name' => 'Mizoram', 'state_name' => '', 'edu_parent_id' => '2'],
            ['edu_id' => 23, 'edu_name' => 'Nagaland', 'state_name' => '', 'edu_parent_id' => '2'],
            ['edu_id' => 24, 'edu_name' => 'Odisha', 'state_name' => '', 'edu_parent_id' => '2'],
            ['edu_id' => 25, 'edu_name' => 'Punjab', 'state_name' => '', 'edu_parent_id' => '2'],
            ['edu_id' => 26, 'edu_name' => 'Rajasthan', 'state_name' => '', 'edu_parent_id' => '2'],
            ['edu_id' => 27, 'edu_name' => 'Tamil Nadu', 'state_name' => '', 'edu_parent_id' => '2'],
            ['edu_id' => 28, 'edu_name' => 'Tripura', 'state_name' => '', 'edu_parent_id' => '2'],
            ['edu_id' => 29, 'edu_name' => 'Uttar Pradesh', 'state_name' => '', 'edu_parent_id' => '2'],
            ['edu_id' => 30, 'edu_name' => 'West Bengal', 'state_name' => '', 'edu_parent_id' => '2'],
            ['edu_id' => 31, 'edu_name' => 'Other', 'state_name' => '', 'edu_parent_id' => '2'],
        ];

        ZXXiiEducation::insert($data);
    
    }
}
