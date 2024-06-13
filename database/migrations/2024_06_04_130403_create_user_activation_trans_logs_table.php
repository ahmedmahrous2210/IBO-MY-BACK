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
        Schema::create('user_activation_trans_logs', function (Blueprint $table) {
            $table->id();
            $table->string('reseller_id');
            $table->string('user_id');
            $table->string('module');
            $table->string('comment')->nullable();
            $table->string('credit_point');
            $table->string('mac_address')->nullable();
            $table->dateTime('box_expiry_date')->nullable();
            $table->string('activated_from')->nullable()->default('MAIN');
            $table->integer('is_disable_processed')->nullable();
            $table->dateTime('disabling_process_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_activation_trans_logs');
    }
};
