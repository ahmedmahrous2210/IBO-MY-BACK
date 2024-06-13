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
        Schema::create('client_app_ref', function (Blueprint $table) {
            $table->id();
            $table->Integer('app_ref_id');
            $table->string('channel_id')->nullable();
            $table->string('client_id')->nullable();
            $table->string('request_id')->nullable();
            $table->timestamps();
            $table->string('req_json');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_app_ref');
    }
};
