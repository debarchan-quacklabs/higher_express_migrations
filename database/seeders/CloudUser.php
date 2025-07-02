<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CloudUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cloud_user')->insert([
            [
                'cloud_user_id'    => 1,
                'u_id'             => null,
                'role_id'          => null,
                'module_id'        => null,
                'cloud_user_name'  => 'Quacklabs',
                'cloud_user_email' => 'manoj@quacklabs.co.in',
                'cloud_user_image' => null,
                'password'         => '17c4520f6cfd1ab53d8745e84681eb49',
                'date'             => null,
                'time'             => null,
                'ip'               => null,
                'browser'          => null,
                'created_at'       => now(),
                'updated_at'       => now(),
            ],
            [
                'cloud_user_id'    => 2,
                'u_id'             => null,
                'role_id'          => null,
                'module_id'        => null,
                'cloud_user_name'  => 'East Miles',
                'cloud_user_email' => 'eastmiles@quacklabs.co.in',
                'cloud_user_image' => null,
                'password'         => '17c4520f6cfd1ab53d8745e84681eb49',
                'date'             => null,
                'time'             => null,
                'ip'               => null,
                'browser'          => null,
                'created_at'       => now(),
                'updated_at'       => now(),
            ],
        ]);
    }
}
