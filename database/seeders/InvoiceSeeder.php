<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Invoice;
use App\Models\User;
use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::where('email', 'admin@krisnanet.test')->first();
        $ahmad = Customer::where('customer_code', 'CUST-001')->first();
        $siti = Customer::where('customer_code', 'CUST-002')->first();

        Invoice::create([
            'invoice_number' => 'INV-202603-001',
            'customer_id' => $ahmad->id,
            'package_name_snapshot' => 'Premium 50 Mbps',
            'amount' => 350000,
            'billing_month' => 3,
            'billing_year' => 2026,
            'due_date' => '2026-03-10',
            'status' => 'unpaid',
            'notes' => 'Tagihan bulan Maret 2026',
            'created_by' => $admin->id,
        ]);

        Invoice::create([
            'invoice_number' => 'INV-202603-002',
            'customer_id' => $siti->id,
            'package_name_snapshot' => 'Standard 25 Mbps',
            'amount' => 250000,
            'billing_month' => 3,
            'billing_year' => 2026,
            'due_date' => '2026-03-10',
            'status' => 'pending_verification',
            'notes' => 'Tagihan bulan Maret 2026',
            'created_by' => $admin->id,
        ]);
    }
}