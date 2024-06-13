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
        Schema::create('client_activation_trans_logs', function (Blueprint $table) {
            $table->id();
            $table->Integer('reseller_id');
            $table->unsignedBigInteger('user_id');
            $table->string('module');
            $table->string('channel_id');
            $table->string('mac_address')->nullable();
            $table->integer('credit_point');
            $table->dateTime('box_expiry_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_activation_trans_logs');
    }
};
