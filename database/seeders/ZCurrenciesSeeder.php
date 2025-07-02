<?php
namespace Database\Seeders;

use App\Models\ZCurrency;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZCurrenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

       ZCurrency::insert([
            [
                'currency_id'   => 1,
                'currency_code' => 'INR',
                'currency_name' => 'Indian Rupee',
                'country'       => 'India',
                'date'          => now()->format('Y-m-d'),
                'time'          => now()->format('H:i:s'),
                'ip'            => request()->ip() ?? '127.0.0.1',
                'browser'       => 'Seeder',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
        ]);
    }
}
