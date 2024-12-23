<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Donor;
use App\Models\Volunteer;

class DonorAndVolunteerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Donor::create([
            'name' => 'Budi Santoso',
            'profile_picture' => '/images/image_6.jpg',
            'description' => 'Generous donor contributing to our cause.',
            'total_donation' => 20000000,
        ]);

        Donor::create([
            'name' => 'Calvin Apin',
            'profile_picture' => '/images/Cecilia.png',
            'description' => 'Generous donor contributing to our cause.',
            'total_donation' => 10000000,
        ]);

        Volunteer::create([
            'name' => 'Rizky Fadillah',
            'profile_picture' => '/images/image_7.jpg',
            'description' => 'Active volunteer helping in multiple activities.',
            'activity_count' => 15,
        ]);

        Volunteer::create([
            'name' => 'Calvin Apin',
            'profile_picture' => '/images/Cecilia.png',
            'description' => 'Active volunteer helping in multiple activities.',
            'activity_count' => 20,
        ]);
    }
}
