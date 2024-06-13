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
        Schema::create('iboiptv_registration_request', function (Blueprint $table) {
            $table->id();
            $table->string('mac_id')->nullable();
            $table->string('request_logs')->nullable();
            $table->string('request_ip')->nullable();
            $table->string('user_agent')->nullable();
            $table->string('app_reg_by')->default('FAKER');
            $table->string('request_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iboiptv_registration_request');
    }
};
