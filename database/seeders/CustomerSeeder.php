<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Package;
use App\Models\User;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        $ahmadUser = User::where('email', 'ahmad@krisnanet.test')->first();
        $sitiUser = User::where('email', 'siti@krisnanet.test')->first();

        $premiumPackage = Package::where('name', 'Premium')->first();
        $standardPackage = Package::where('name', 'Standard')->first();

        Customer::create([
            'user_id' => $ahmadUser->id,
            'customer_code' => 'CUST-001',
            'full_name' => 'Ahmad Wijaya',
            'phone' => '081234567890',
            'address' => 'Jl. Melati No. 10',
            'district' => 'Cicendo',
            'package_id' => $premiumPackage->id,
            'service_status' => 'active',
            'installation_date' => '2026-01-10',
        ]);

        Customer::create([
            'user_id' => $sitiUser->id,
            'customer_code' => 'CUST-002',
            'full_name' => 'Siti Nurhaliza',
            'phone' => '081234567891',
            'address' => 'Jl. Anggrek No. 15',
            'district' => 'Coblong',
            'package_id' => $standardPackage->id,
            'service_status' => 'active',
            'installation_date' => '2026-01-15',
        ]);
    }
}