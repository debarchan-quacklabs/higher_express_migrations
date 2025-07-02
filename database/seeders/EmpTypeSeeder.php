<?php

namespace Database\Seeders;

use App\Models\ZEmpType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import DB facade

class EmpTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert data into the 'z_emp_type' table
        ZEmpType::insert([
            [
                'emp_type_id' => 1,
                'cloud_id' => 0,
                'emp_type' => 'Intern',
                'is_visible' => 'Yes',
                'is_hidden' => '0',
                'source' => 'Global',
                'date' => '2023-01-28',
                'time' => '09:15:23 pm',
            ],
            [
                'emp_type_id' => 2,
                'cloud_id' => 0,
                'emp_type' => 'Contract',
                'is_visible' => 'Yes',
                'is_hidden' => '0',
                'source' => 'Global',
                'date' => '2023-01-28',
                'time' => '09:15:23 pm',
            ],
            [
                'emp_type_id' => 3,
                'cloud_id' => 0,
                'emp_type' => 'Full Time',
                'is_visible' => 'Yes',
                'is_hidden' => '0',
                'source' => 'Global',
                'date' => '2023-01-28',
                'time' => '09:15:23 pm',
            ],
            [
                'emp_type_id' => 4,
                'cloud_id' => 0,
                'emp_type' => 'Part Time',
                'is_visible' => 'Yes',
                'is_hidden' => '0',
                'source' => 'Global',
                'date' => '2023-01-28',
                'time' => '09:15:23 pm',
            ],
            [
                'emp_type_id' => 5,
                'cloud_id' => 0,
                'emp_type' => 'Probation',
                'is_visible' => 'Yes',
                'is_hidden' => '0',
                'source' => 'Global',
                'date' => '2023-01-28',
                'time' => '09:15:23 pm',
            ],
            [
                'emp_type_id' => 6,
                'cloud_id' => 0,
                'emp_type' => 'Commission',
                'is_visible' => 'Yes',
                'is_hidden' => '0',
                'source' => 'Global',
                'date' => '2023-01-28',
                'time' => '09:15:23 pm',
            ],
            [
                'emp_type_id' => 7,
                'cloud_id' => 0,
                'emp_type' => 'Free Lancer',
                'is_visible' => 'Yes',
                'is_hidden' => '0',
                'source' => 'Global',
                'date' => '2023-12-12',
                'time' => '10:20:11 pm',
            ],
            [
                'emp_type_id' => 8,
                'cloud_id' => 0,
                'emp_type' => 'Agency Resource',
                'is_visible' => 'Yes',
                'is_hidden' => '0',
                'source' => 'Global',
                'date' => '2023-01-28',
                'time' => '09:15:23 pm',
            ],
            [
                'emp_type_id' => 9,
                'cloud_id' => 0,
                'emp_type' => 'Temporary',
                'is_visible' => 'Yes',
                'is_hidden' => '0',
                'source' => 'Global',
                'date' => '2023-01-28',
                'time' => '09:15:23 pm',
            ],
            [
                'emp_type_id' => 10,
                'cloud_id' => 0,
                'emp_type' => 'Consultant',
                'is_visible' => 'Yes',
                'is_hidden' => '0',
                'source' => 'Global',
                'date' => '2023-01-28',
                'time' => '09:15:23 pm',
            ],
            [
                'emp_type_id' => 11,
                'cloud_id' => 0,
                'emp_type' => 'Apprentice',
                'is_visible' => 'Yes',
                'is_hidden' => '0',
                'source' => 'Global',
                'date' => '2023-12-12',
                'time' => '12:25:25 pm',
            ],
            [
                'emp_type_id' => 43,
                'cloud_id' => 1,
                'emp_type' => 'NA',
                'is_visible' => 'No',
                'is_hidden' => '11',
                'source' => 'NA',
                'date' => '2023-01-31',
                'time' => '13:12:25 pm',
            ],
            [
                'emp_type_id' => 48,
                'cloud_id' => 1,
                'emp_type' => 'NA',
                'is_visible' => 'No',
                'is_hidden' => '6',
                'source' => 'NA',
                'date' => '2023-03-13',
                'time' => '23:14:55 pm',
            ],
            [
                'emp_type_id' => 52,
                'cloud_id' => 1,
                'emp_type' => 'NA',
                'is_visible' => 'No',
                'is_hidden' => '10',
                'source' => 'NA',
                'date' => '2023-06-13',
                'time' => '15:14:41 pm',
            ],
        ]);
    }
}
