<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Staff;

class StaffSeeder extends Seeder
{
    public function run(): void
    {
        Staff::create(['name' => 'Keira Nevrada Lay', 'photo' => 'member-1.png']);
        Staff::create(['name' => 'Johana Veronica S', 'photo' => 'member-2.png']);
        Staff::create(['name' => 'Yosmia Khaira', 'photo' => 'member-3.png']);
    }
}
