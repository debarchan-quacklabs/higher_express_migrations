<?php

namespace Database\Seeders;

use App\Models\CloudAllowedModule;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CloudAllowedModulesTableSeeder extends Seeder
{
   
    public function run()
    {
        
       
        CloudAllowedModule::insert([
            [
                'cam_id' => 1,
                'cloud_id' => 0,
                'arise_modules' => 'No',
                'aspire_modules' => 'No',
                'transpire_modules' => 'No',
                'retention_modules' => 'No',
                'vendor_modules' => 'No',
                'pride_modules' => 'No',
            ],
            [
                'cam_id' => 2,
                'cloud_id' => 1,
                'arise_modules' => 'No',
                'aspire_modules' => 'No',
                'transpire_modules' => 'No',
                'retention_modules' => 'No',
                'vendor_modules' => 'Yes',
                'pride_modules' => 'Yes',
            ],
        ]);

    }
}

