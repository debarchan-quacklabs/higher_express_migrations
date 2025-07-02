<?php

namespace Database\Seeders;

use App\Models\CloudPayoutConfigure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CloudPayoutConfigureTableSeeder extends Seeder
{
   
    public function run()
    {
        
        CloudPayoutConfigure::insert([
            [
                'config_id' => 1,
                'cloud_id' => 1,
                'admin' => 'Yes',
                'emerge' => 'Yes',
                'desire' => 'Yes',
                'guide' => 'Yes',
                'partner' => 'Yes',
                'referral' => 'Yes',
                'arise' => 'No',
                'aspire' => 'No',
                'swarna' => 'No',
                'retention' => 'No',
                'transpire' => 'No',
                'pride' => 'Yes',
            ],
        ]);

       
    }
}

