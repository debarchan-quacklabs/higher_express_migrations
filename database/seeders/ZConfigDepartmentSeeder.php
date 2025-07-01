<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZConfigDepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('z_config_department')->insert([

            [
                'dept_id'     => 1,
                'dept_key'    => 'G7HLKNMK',
                'dept_type'   => 'Staffing',
                'dept_name'   => 'Human Resources',
                'module_name' => 'Aspire',

                'date'        => now()->format('Y-m-d'),
                'time'        => now()->format('H:i:s'),
                'ip'          => '192.168.10.1',
                'browser'     => 'Chrome',

                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'dept_id'     => 2,
                'dept_key'    => 'RUOQ7R23',
                'dept_type'   => 'Staffing',
                'dept_name'   => 'Business Development',
                'module_name' => 'Arise',

                'date'        => now()->format('Y-m-d'),
                'time'        => now()->format('H:i:s'),
                'ip'          => '192.168.10.1',
                'browser'     => 'Chrome',

                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'dept_id'     => 3,
                'dept_key'    => 'S5W2HSG2',
                'dept_type'   => 'Staffing',
                'dept_name'   => 'Hiring',
                'module_name' => 'Desire',

                'date'        => now()->format('Y-m-d'),
                'time'        => now()->format('H:i:s'),
                'ip'          => '192.168.10.1',
                'browser'     => 'Chrome',

                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'dept_id'     => 4,
                'dept_key'    => 'G7MH79SIM',
                'dept_type'   => 'Staffing',
                'dept_name'   => 'Support',
                'module_name' => 'Guide',

                'date'        => now()->format('Y-m-d'),
                'time'        => now()->format('H:i:s'),
                'ip'          => '192.168.10.1',
                'browser'     => 'Chrome',

                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'dept_id'     => 5,
                'dept_key'    => 'FIG45D3LM',
                'dept_type'   => 'Staffing',
                'dept_name'   => 'Finance',
                'module_name' => 'Swarna',

                'date'        => now()->format('Y-m-d'),
                'time'        => now()->format('H:i:s'),
                'ip'          => '192.168.10.1',
                'browser'     => 'Chrome',

                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'dept_id'     => 6,
                'dept_key'    => 'GVB5GCXN',
                'dept_type'   => 'Staffing',
                'dept_name'   => 'Referral Partner',
                'module_name' => 'Referral',

                'date'        => now()->format('Y-m-d'),
                'time'        => now()->format('H:i:s'),
                'ip'          => '192.168.10.1',
                'browser'     => 'Chrome',

                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'dept_id'     => 7,
                'dept_key'    => 'UYGG34454',
                'dept_type'   => 'Staffing',
                'dept_name'   => 'Vendor',
                'module_name' => 'Partner',

                'date'        => now()->format('Y-m-d'),
                'time'        => now()->format('H:i:s'),
                'ip'          => '192.168.10.1',
                'browser'     => 'Chrome',

                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'dept_id'     => 8,
                'dept_key'    => '847YY5DW2',
                'dept_type'   => 'Staffing',
                'dept_name'   => 'Key Account Management ',
                'module_name' => 'Emerge',

                'date'        => now()->format('Y-m-d'),
                'time'        => now()->format('H:i:s'),
                'ip'          => '192.168.10.1',
                'browser'     => 'Chrome',

                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'dept_id'     => 9,
                'dept_key'    => 'RTGDKG565',
                'dept_type'   => 'Staffing',
                'dept_name'   => 'Retention',
                'module_name' => 'Retention',

                'date'        => now()->format('Y-m-d'),
                'time'        => now()->format('H:i:s'),
                'ip'          => '192.168.10.1',
                'browser'     => 'Chrome',

                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'dept_id'     => 10,
                'dept_key'    => 'PCLI876TFD',
                'dept_type'   => 'Enterprise',
                'dept_name'   => 'Administrator',
                'module_name' => 'Enterprise-Pride',

                'date'        => now()->format('Y-m-d'),
                'time'        => now()->format('H:i:s'),
                'ip'          => '192.168.10.1',
                'browser'     => 'Chrome',

                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'dept_id'     => 11,
                'dept_key'    => 'G7HLKNMK',
                'dept_type'   => 'Enterprise',
                'dept_name'   => 'Human Resources',
                'module_name' => 'Enterprise-Aspire',

                'date'        => now()->format('Y-m-d'),
                'time'        => now()->format('H:i:s'),
                'ip'          => '192.168.10.1',
                'browser'     => 'Chrome',

                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'dept_id'     => 12,
                'dept_key'    => 'RUOQ7R23',
                'dept_type'   => 'Enterprise',
                'dept_name'   => 'Business Development',
                'module_name' => 'Enterprise-Arise',

                'date'        => now()->format('Y-m-d'),
                'time'        => now()->format('H:i:s'),
                'ip'          => '192.168.10.1',
                'browser'     => 'Chrome',

                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'dept_id'     => 14,
                'dept_key'    => 'S5W2HSG2',
                'dept_type'   => 'Enterprise',
                'dept_name'   => 'Hiring',
                'module_name' => 'Enterprise-Desire',

                'date'        => now()->format('Y-m-d'),
                'time'        => now()->format('H:i:s'),
                'ip'          => '192.168.10.1',
                'browser'     => 'Chrome',

                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'dept_id'     => 15,
                'dept_key'    => 'FIG45D3LM',
                'dept_type'   => 'Enterprise',
                'dept_name'   => 'Finance',
                'module_name' => 'Enterprise-Swarna',

                'date'        => now()->format('Y-m-d'),
                'time'        => now()->format('H:i:s'),
                'ip'          => '192.168.10.1',
                'browser'     => 'Chrome',

                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'dept_id'     => 16,
                'dept_key'    => 'GVB5GCXN',
                'dept_type'   => 'Enterprise',
                'dept_name'   => 'Referral Partner',
                'module_name' => 'Enterprise-Referral',

                'date'        => now()->format('Y-m-d'),
                'time'        => now()->format('H:i:s'),
                'ip'          => '192.168.10.1',
                'browser'     => 'Chrome',

                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'dept_id'     => 17,
                'dept_key'    => 'UYGG34454',
                'dept_type'   => 'Enterprise',
                'dept_name'   => 'Vendor',
                'module_name' => 'Enterprise-Partner',

                'date'        => now()->format('Y-m-d'),
                'time'        => now()->format('H:i:s'),
                'ip'          => '192.168.10.1',
                'browser'     => 'Chrome',

                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'dept_id'     => 18,
                'dept_key'    => '847YY5DW2',
                'dept_type'   => 'Enterprise',
                'dept_name'   => 'Key Account Management ',
                'module_name' => 'Enterprise-Emerge',

                'date'        => now()->format('Y-m-d'),
                'time'        => now()->format('H:i:s'),
                'ip'          => '192.168.10.1',
                'browser'     => 'Chrome',

                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'dept_id'     => 19,
                'dept_key'    => 'RTGDKG565',
                'dept_type'   => 'Enterprise',
                'dept_name'   => 'Retention',
                'module_name' => 'Enterprise-Retention',

                'date'        => now()->format('Y-m-d'),
                'time'        => now()->format('H:i:s'),
                'ip'          => '192.168.10.1',
                'browser'     => 'Chrome',

                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'dept_id'     => 20,
                'dept_key'    => 'TASDFD52K',
                'dept_type'   => 'Staffing',
                'dept_name'   => 'Partner Account Management',
                'module_name' => 'Transpire',

                'date'        => now()->format('Y-m-d'),
                'time'        => now()->format('H:i:s'),
                'ip'          => '192.168.10.1',
                'browser'     => 'Chrome',

                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'dept_id'     => 21,
                'dept_key'    => 'DBF4YF66',
                'dept_type'   => 'Staffing',
                'dept_name'   => 'Client',
                'module_name' => 'Pride',

                'date'        => now()->format('Y-m-d'),
                'time'        => now()->format('H:i:s'),
                'ip'          => '192.168.10.1',
                'browser'     => 'Chrome',

                'created_at'  => now(),
                'updated_at'  => now(),
            ],

        ]);
        //
    }
}
