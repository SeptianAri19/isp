<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('customer_code')->unique();
            $table->string('full_name');
            $table->string('phone', 30);
            $table->text('address');
            $table->string('district', 100);

            $table->foreignId('package_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->string('service_status', 20)->default('active');
            $table->date('installation_date')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
