<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        $services = [
            'Pet Grooming',
            'Dog Walking',
            'Pet Sitting',
            'Overnight Care',
            'Pet Training',
            'Pet Clinic',
        ];

        foreach ($services as $service) {
            Service::create([
                'name' => $service,
            ]);
        }
    }
}