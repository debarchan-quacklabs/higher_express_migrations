<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ZLanguagesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('z_languages')->insert([
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
