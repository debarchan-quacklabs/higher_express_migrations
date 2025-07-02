<?php

namespace Database\Seeders;

use App\Models\ZJdCategory;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZJdCategorySeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        $categories = [
            [1, 'Construction', 0, 0],
            [2, 'Corporate Training', 0, 0],
            [3, 'Design', 0, 0],
            [4, 'Travel Toursim', 0, 0],
            [5, 'Real Estate', 0, 0],
            [6, 'Healthcare', 0, 0],
            [7, 'IT Development', 0, 0],
            [8, 'Security', 0, 0],
            [9, 'Logistics', 0, 0],
            [10, 'Engineering', 0, 0],
            [11, 'Media', 0, 0],
            [12, 'Education', 0, 0],
            [13, 'Human Resources', 0, 0],
            [14, 'Sales', 0, 0],
            [15, 'Accounting', 0, 0],
            [16, 'Administrative', 0, 0],
            [17, 'Customer Service', 0, 0],
            [18, 'Facilities', 0, 0],
            [19, 'Pharmaceuticals', 0, 0],
            [20, 'Legal', 0, 0],
            [21, 'Production', 0, 0],
            [22, 'Finance', 0, 0],
            [23, 'Hospitality', 0, 0],
            [24, 'Marketing', 0, 0],
            [25, 'Crane Operator', 0, 1],
        ];

        foreach ($categories as $cat) {
            ZJdCategory::insert([
                'jd_category_id' => $cat[0],
                'jd_category_name' => $cat[1],
                'jd_category_order' => $cat[2],
                'js_category_parent_id' => $cat[3],
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}
