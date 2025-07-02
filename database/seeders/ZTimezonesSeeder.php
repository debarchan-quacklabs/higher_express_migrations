<?php

namespace Database\Seeders;

use App\Models\ZTimezone;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZTimezonesSeeder extends Seeder
{
    public function run(): void
    {
        ZTimezone::insert([
            ['timezone_id' => 1, 'timezone' => '(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
