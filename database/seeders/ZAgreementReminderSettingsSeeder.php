<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZAgreementReminderSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('z_agreement_reminder_settings')->insert([
            'id'           => 1,
            'cloud_id'     => 1,

            // Reminder 1
            'reminder_1'   => 1,
            'daysbefore_1' => 90,
            'email_1'      => 1,
            'whatsapp_1'   => 1,
            'sms_1'        => 0,
            'inapp_1'      => 0,
            'receipient_1' => null,

            // Reminder 2
            'reminder_2'   => 0,
            'daysbefore_2' => 0,
            'email_2'      => 0,
            'whatsapp_2'   => 0,
            'sms_2'        => 0,
            'inapp_2'      => 0,
            'receipient_2' => null,

            // Reminder 3
            'reminder_3'   => 0,
            'daysbefore_3' => 0,
            'email_3'      => 0,
            'whatsapp_3'   => 0,
            'sms_3'        => 0,
            'inapp_3'      => 0,
            'receipient_3' => null,

            // Reminder 4
            'reminder_4'   => 0,
            'daysbefore_4' => 0,
            'email_4'      => 0,
            'whatsapp_4'   => 0,
            'sms_4'        => 0,
            'inapp_4'      => 0,
            'receipient_4' => null,

            // Reminder 5
            'reminder_5'   => 0,
            'daysbefore_5' => 0,
            'email_5'      => 0,
            'whatsapp_5'   => 0,
            'sms_5'        => 0,
            'inapp_5'      => 0,
            'receipient_5' => null,

            // Reminder 6
            'reminder_6'   => 0,
            'daysbefore_6' => 0,
            'email_6'      => 0,
            'whatsapp_6'   => 0,
            'sms_6'        => 0,
            'inapp_6'      => 0,
            'receipient_6' => null,

            // Tracking fields
            'date'         => now()->format('Y-m-d'),
            'time'         => now()->format('H:i:s'),
            'ip'           => '127.0.0.1',
            'browser'      => 'Seeder Script',

            'created_at'   => now(),
            'updated_at'   => now(),
        ]);

        //
    }
}
