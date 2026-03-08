<?php

namespace Database\Seeders;

use App\Models\PaymentAccount;
use Illuminate\Database\Seeder;

class PaymentAccountSeeder extends Seeder
{
    public function run(): void
    {
        PaymentAccount::create([
            'bank_name' => 'BCA',
            'account_name' => 'Krisna Net',
            'account_number' => '1234567890',
            'notes' => 'Transfer sesuai nominal tagihan.',
            'is_active' => true,
        ]);

        PaymentAccount::create([
            'bank_name' => 'BRI',
            'account_name' => 'Krisna Net',
            'account_number' => '9876543210',
            'notes' => 'Konfirmasi setelah transfer.',
            'is_active' => true,
        ]);
    }
}