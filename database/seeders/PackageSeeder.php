<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    public function run(): void
    {
        Package::create([
            'name' => 'Basic',
            'speed_mbps' => 10,
            'price' => 150000,
            'description' => 'Paket internet basic untuk kebutuhan ringan.',
            'is_active' => true,
        ]);

        Package::create([
            'name' => 'Standard',
            'speed_mbps' => 25,
            'price' => 250000,
            'description' => 'Paket internet untuk kebutuhan rumah tangga harian.',
            'is_active' => true,
        ]);

        Package::create([
            'name' => 'Premium',
            'speed_mbps' => 50,
            'price' => 350000,
            'description' => 'Paket internet cepat untuk streaming dan kerja online.',
            'is_active' => true,
        ]);
    }
}