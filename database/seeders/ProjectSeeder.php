<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::truncate();
        $datas = [
            [
                'user_id' => 1,

                'title' => 'IRCTC Verification Automation',
                'skill_used' => json_encode([8]),
                'start_date' => '10-10-2023',
                'end_date' => '15-10-2023',
                'type' => '1',
                'pointers' => json_encode([
                    'Utilize Selenium to automate the login process on the IRCTC website.',
                    'Implement Tesseract OCR to parse captcha images on the IRCTC website',
                    'Integrate external APIs to generate random mobile numbers and email addresses for pending verifications.'
                ]),
                'description' => "The project streamlines the IRCTC user verification process by automating login, handling captcha using Tesseract OCR, and utilizing external APIs for pending verifications. It enhances efficiency and reduces manual intervention in the verification workflow."
            ],
            [
                'user_id' => 1,

                'title' => 'Breast Cancer Detection',
                'skill_used' => json_encode([8]),
                'start_date' => '01-04-2023',
                'end_date' => '30-06-2023',
                'type' => '1',
                'pointers' => json_encode([
                    'Utilize Selenium to automate the login process on the IRCTC website.',
                    'Implement Tesseract OCR to parse captcha images on the IRCTC website',
                    'Integrate external APIs to generate random mobile numbers and email addresses for pending verifications.'
                ]),
                'description' => "The project streamlines the IRCTC user verification process by automating login, handling captcha using Tesseract OCR, and utilizing external APIs for pending verifications. It enhances efficiency and reduces manual intervention in the verification workflow."
            ],

        ];
        Project::insert($datas);
    }
}
