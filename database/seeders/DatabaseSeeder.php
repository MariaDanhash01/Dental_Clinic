<?php

namespace Database\Seeders;

use App\Models\Receptionist;
use App\Models\SuppliesRequest;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            AdminSeeder::class,
            SpecializationSeeder::class,
            ReceptionistSeeder::class,
            DepartmentSeeder::class,
            DoctorSeeder::class,
            StoreKeeperEmployeeSeeder::class,
            MedicalSuppliesSeeder::class,
            SuppliesRequestSeeder::class,
            // AppointmentSeeder::class
        ]);
    }
}
