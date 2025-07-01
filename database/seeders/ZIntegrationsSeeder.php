<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZIntegrationsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('z_integrations')->insert([
            [
                'intg_id' => 1,
                'intg_name' => 'Google Meet',
                'intg_config' => json_encode([
                    'ZOOM_API_KEY' => '',
                    'ZOOM_API_SECRET' => '',
                    'ZOOM_EMAIL_ID' => ''
                ]),
                'intg_type' => 'Online Interviews',
                'intg_desc' => '',
                'intg_shortdesc' => 'Let your hiring team evaluate candidates over video interviews by using Google Meet',
                'intg_status' => 1,
                'intg_logo' => 'google-meet-icon.png',
            ],
            [
                'intg_id' => 2,
                'intg_name' => 'Microsoft Teams',
                'intg_config' => json_encode([
                    'ZOOM_API_KEY' => '',
                    'ZOOM_API_SECRET' => '',
                    'ZOOM_EMAIL_ID' => ''
                ]),
                'intg_type' => 'Online Interviews',
                'intg_desc' => 'Let your hiring team evaluate candidates over video interviews by using Microsoft Teams. ',
                'intg_shortdesc' => 'Let your hiring team evaluate candidates over video interviews by using Microsoft Teams. ',
                'intg_status' => 1,
                'intg_logo' => 'microsoft-teams-icon.png',
            ],
            [
                'intg_id' => 3,
                'intg_name' => 'Zoom',
                'intg_config' => json_encode([
                    'ZOOM_API_KEY' => '',
                    'ZOOM_API_SECRET' => '',
                    'ZOOM_EMAIL_ID' => ''
                ]),
                'intg_type' => 'Online Interviews',
                'intg_desc' => 'Let your hiring team evaluate candidates over video interviews by using Zoom ',
                'intg_shortdesc' => 'Let your hiring team evaluate candidates over video interviews by using Zoom ',
                'intg_status' => 1,
                'intg_logo' => 'zoom-icon.png',
            ],
            [
                'intg_id' => 4,
                'intg_name' => 'HackerRank CodePair',
                'intg_config' => json_encode([
                    'ZOOM_API_KEY' => '',
                    'ZOOM_API_SECRET' => '',
                    'ZOOM_EMAIL_ID' => ''
                ]),
                'intg_type' => 'Online Interviews',
                'intg_desc' => 'HackerRank CodePair is a platform that helps you assess tech candidates through online interviews with code challenges. ',
                'intg_shortdesc' => 'HackerRank CodePair is a platform that helps you assess tech candidates through online interviews with code challenges. ',
                'intg_status' => 1,
                'intg_logo' => 'hackerrank-icon.png',
            ]
        ]);
    }
}
