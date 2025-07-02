<?php

namespace Database\Seeders;

use App\Models\ZLanguage;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZLanguagesSeeder extends Seeder
{
    public function run(): void
    {
        ZLanguage::insert([
            [
                'language_id' => 1,
                'language' => 'English',
                'ISO_code' => 'en',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
