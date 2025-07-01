<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class ZUserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('z_user_type')->insert([
            ['role_id' => 1, 'dept_id' => 0, 'dept_type' => 'Staffing', 'user_type' => 'Administrator'],
            ['role_id' => 2, 'dept_id' => 1, 'dept_type' => 'Staffing', 'user_type' => 'Executive - HRMS'],
            ['role_id' => 3, 'dept_id' => 1, 'dept_type' => 'Staffing', 'user_type' => 'Manager - HRMS'],
            ['role_id' => 4, 'dept_id' => 1, 'dept_type' => 'Staffing', 'user_type' => 'abcd'],
            ['role_id' => 5, 'dept_id' => 2, 'dept_type' => 'Staffing', 'user_type' => 'Executive - Business Development'],
            ['role_id' => 6, 'dept_id' => 2, 'dept_type' => 'Staffing', 'user_type' => 'Manager - Business Development'],
            ['role_id' => 7, 'dept_id' => 2, 'dept_type' => 'Staffing', 'user_type' => 'Regional Manager - Business Development'],
            ['role_id' => 8, 'dept_id' => 2, 'dept_type' => 'Staffing', 'user_type' => 'Country Head - Business Development'],
            ['role_id' => 9, 'dept_id' => 2, 'dept_type' => 'Staffing', 'user_type' => 'Global Head - Business Development'],
            ['role_id' => 10, 'dept_id' => 3, 'dept_type' => 'Staffing', 'user_type' => 'Recruiter - Hiring'],
            ['role_id' => 11, 'dept_id' => 3, 'dept_type' => 'Staffing', 'user_type' => 'Team Leader - Hiring'],
            ['role_id' => 12, 'dept_id' => 3, 'dept_type' => 'Staffing', 'user_type' => 'Branch Head - Hiring'],
            ['role_id' => 13, 'dept_id' => 3, 'dept_type' => 'Staffing', 'user_type' => 'Regional Manager - Hiring'],
            ['role_id' => 14, 'dept_id' => 3, 'dept_type' => 'Staffing', 'user_type' => 'Country Head - Hiring'],
            ['role_id' => 15, 'dept_id' => 3, 'dept_type' => 'Staffing', 'user_type' => 'Global Head - Hiring'],
            ['role_id' => 16, 'dept_id' => 4, 'dept_type' => 'Staffing', 'user_type' => 'Executive - Support'],
            ['role_id' => 17, 'dept_id' => 4, 'dept_type' => 'Staffing', 'user_type' => 'Manager - Support'],
            ['role_id' => 18, 'dept_id' => 5, 'dept_type' => 'Staffing', 'user_type' => 'Executive - Finance'],
            ['role_id' => 19, 'dept_id' => 5, 'dept_type' => 'Staffing', 'user_type' => 'Manager - Finance'],
            ['role_id' => 20, 'dept_id' => 5, 'dept_type' => 'Staffing', 'user_type' => 'VP - Finance'],
            ['role_id' => 21, 'dept_id' => 5, 'dept_type' => 'Staffing', 'user_type' => 'Chief Financial Officer'],
            ['role_id' => 22, 'dept_id' => 6, 'dept_type' => 'Staffing', 'user_type' => 'Referral Partner'],
            ['role_id' => 23, 'dept_id' => 7, 'dept_type' => 'Staffing', 'user_type' => 'Recruiter - Partner'],
            ['role_id' => 24, 'dept_id' => 7, 'dept_type' => 'Staffing', 'user_type' => 'Branch Lead - Partner'],
            ['role_id' => 25, 'dept_id' => 7, 'dept_type' => 'Staffing', 'user_type' => 'Administrator - Partner'],
            ['role_id' => 26, 'dept_id' => 8, 'dept_type' => 'Staffing', 'user_type' => 'Executive - Key Account Management'],
            ['role_id' => 27, 'dept_id' => 8, 'dept_type' => 'Staffing', 'user_type' => 'Manager - Key Account Management'],
            ['role_id' => 28, 'dept_id' => 8, 'dept_type' => 'Staffing', 'user_type' => 'Regional Manager - Key Account Management'],
            ['role_id' => 29, 'dept_id' => 8, 'dept_type' => 'Staffing', 'user_type' => 'Country Head - Key Account Management'],
            ['role_id' => 30, 'dept_id' => 8, 'dept_type' => 'Staffing', 'user_type' => 'Global Head - Key Account Management'],
            ['role_id' => 31, 'dept_id' => 9, 'dept_type' => 'Staffing', 'user_type' => 'Executive - Retention'],
            ['role_id' => 32, 'dept_id' => 9, 'dept_type' => 'Staffing', 'user_type' => 'Manager - Retention'],
            ['role_id' => 33, 'dept_id' => 20, 'dept_type' => 'Staffing', 'user_type' => 'Executive - Transpire'],
            ['role_id' => 34, 'dept_id' => 20, 'dept_type' => 'Staffing', 'user_type' => 'Manager - Transpire'],
            ['role_id' => 35, 'dept_id' => 21, 'dept_type' => 'Staffing', 'user_type' => 'Administrator - Client'],
            ['role_id' => 36, 'dept_id' => 21, 'dept_type' => 'Staffing', 'user_type' => 'HR Manager'],
            ['role_id' => 37, 'dept_id' => 21, 'dept_type' => 'Staffing', 'user_type' => 'zm'],
            ['role_id' => 38, 'dept_id' => 21, 'dept_type' => 'Staffing', 'user_type' => 'vp'],
            ['role_id' => 39, 'dept_id' => 21, 'dept_type' => 'Staffing', 'user_type' => 'HR Manager'],
            ['role_id' => 40, 'dept_id' => 21, 'dept_type' => 'Staffing', 'user_type' => 'zm'],
            ['role_id' => 41, 'dept_id' => 21, 'dept_type' => 'Staffing', 'user_type' => 'vp'],
            ['role_id' => 42, 'dept_id' => 21, 'dept_type' => 'Staffing', 'user_type' => 'HR Manager'],
            ['role_id' => 43, 'dept_id' => 10, 'dept_type' => 'Enterprise', 'user_type' => 'Administrator'],
            ['role_id' => 44, 'dept_id' => 11, 'dept_type' => 'Enterprise', 'user_type' => 'Executive - HRMS'],
            ['role_id' => 45, 'dept_id' => 11, 'dept_type' => 'Enterprise', 'user_type' => 'Manager - HRMS'],
            ['role_id' => 46, 'dept_id' => 11, 'dept_type' => 'Enterprise', 'user_type' => 'abcd'],
            ['role_id' => 47, 'dept_id' => 12, 'dept_type' => 'Enterprise', 'user_type' => 'Executive - Business Development'],
            ['role_id' => 48, 'dept_id' => 12, 'dept_type' => 'Enterprise', 'user_type' => 'Manager - Business Development'],
            ['role_id' => 49, 'dept_id' => 12, 'dept_type' => 'Enterprise', 'user_type' => 'Regional Manager - Business Development'],
            ['role_id' => 50, 'dept_id' => 12, 'dept_type' => 'Enterprise', 'user_type' => 'Country Head - Business Development'],
            ['role_id' => 51, 'dept_id' => 12, 'dept_type' => 'Enterprise', 'user_type' => 'Global Head - Business Development'],
            ['role_id' => 52, 'dept_id' => 13, 'dept_type' => 'Enterprise', 'user_type' => 'Recruiter - Hiring'],
            ['role_id' => 53, 'dept_id' => 13, 'dept_type' => 'Enterprise', 'user_type' => 'Team Leader - Hiring'],
            ['role_id' => 54, 'dept_id' => 13, 'dept_type' => 'Enterprise', 'user_type' => 'Branch Head - Hiring'],
            ['role_id' => 55, 'dept_id' => 13, 'dept_type' => 'Enterprise', 'user_type' => 'Regional Manager - Hiring'],
            ['role_id' => 56, 'dept_id' => 13, 'dept_type' => 'Enterprise', 'user_type' => 'Country Head - Hiring'],
            ['role_id' => 57, 'dept_id' => 13, 'dept_type' => 'Enterprise', 'user_type' => 'Global Head - Hiring'],
            ['role_id' => 58, 'dept_id' => 15, 'dept_type' => 'Enterprise', 'user_type' => 'Executive - Finance'],
            ['role_id' => 59, 'dept_id' => 15, 'dept_type' => 'Enterprise', 'user_type' => 'Manager - Finance'],
            ['role_id' => 60, 'dept_id' => 15, 'dept_type' => 'Enterprise', 'user_type' => 'VP - Finance'],
            ['role_id' => 61, 'dept_id' => 15, 'dept_type' => 'Enterprise', 'user_type' => 'Chief Financial Officer'],
            ['role_id' => 62, 'dept_id' => 16, 'dept_type' => 'Enterprise', 'user_type' => 'Referral Partner'],
            ['role_id' => 63, 'dept_id' => 17, 'dept_type' => 'Enterprise', 'user_type' => 'Recruiter - Partner'],
            ['role_id' => 64, 'dept_id' => 17, 'dept_type' => 'Enterprise', 'user_type' => 'Team Lead - Partner'],
            ['role_id' => 65, 'dept_id' => 17, 'dept_type' => 'Enterprise', 'user_type' => 'Administrator - Partner'],
            ['role_id' => 66, 'dept_id' => 18, 'dept_type' => 'Enterprise', 'user_type' => 'Executive - Key Account Management'],
            ['role_id' => 67, 'dept_id' => 18, 'dept_type' => 'Enterprise', 'user_type' => 'Manager - Key Account Management'],
            ['role_id' => 68, 'dept_id' => 18, 'dept_type' => 'Enterprise', 'user_type' => 'Regional Manager - Key Account Management'],
            ['role_id' => 69, 'dept_id' => 18, 'dept_type' => 'Enterprise', 'user_type' => 'Country Head - Key Account Management'],
            ['role_id' => 70, 'dept_id' => 18, 'dept_type' => 'Enterprise', 'user_type' => 'Global Head - Key Account Management'],
            ['role_id' => 71, 'dept_id' => 19, 'dept_type' => 'Enterprise', 'user_type' => 'Executive - Retention'],
            ['role_id' => 72, 'dept_id' => 19, 'dept_type' => 'Enterprise', 'user_type' => 'Manager - Retention'],
            ['role_id' => 73, 'dept_id' => 7, 'dept_type' => 'Staffing', 'user_type' => 'Individual Parter'],
        ]);
    }
}
