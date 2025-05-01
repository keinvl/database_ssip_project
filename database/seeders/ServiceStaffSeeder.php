<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Staff;
use App\Models\Service;

class ServiceStaffSeeder extends Seeder
{
    public function run(): void
    {
        // Ambil staff satu per satu
        $keira = Staff::where('name', 'Keira Nevrada Lay')->first();
        $johana = Staff::where('name', 'Johana Veronica S')->first();
        $yosmia = Staff::where('name', 'Yosmia Khaira')->first();

        // Ambil services berdasarkan nama
        $petGrooming = Service::where('name', 'Pet Grooming')->first();
        $dogWalking = Service::where('name', 'Dog Walking')->first();
        $petSitting = Service::where('name', 'Pet Sitting')->first();
        $overnightCare = Service::where('name', 'Overnight Care')->first();
        $petTraining = Service::where('name', 'Pet Training')->first();
        $petClinic = Service::where('name', 'Pet Clinic')->first();

        // Staff 1
        if ($keira) {
            $keira->services()->attach([
                $petGrooming->id,
                $petSitting->id,
                $petTraining->id,
            ]);
        }

        // Staff 2
        if ($johana) {
            $johana->services()->attach([
                $dogWalking->id,
                $petSitting->id,
                $overnightCare->id,
            ]);
        }

        // Staff 3
        if ($yosmia) {
            $yosmia->services()->attach([
                $petTraining->id,
                $overnightCare->id,
                $petClinic->id,
            ]);
        }
    }
}
