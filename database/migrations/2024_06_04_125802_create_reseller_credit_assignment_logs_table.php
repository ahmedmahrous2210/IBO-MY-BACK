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
        Schema::create('reseller_credit_assignment_logs', function (Blueprint $table) {
            $table->id();
            $table->integer('debitor_id');
            $table->integer('creditor_id');
            $table->string('credit_point');
            $table->string('tr_type')->nullable()->default('CREDIT');
            $table->foreignId('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reseller_credit_assignment_logs');
    }
};
