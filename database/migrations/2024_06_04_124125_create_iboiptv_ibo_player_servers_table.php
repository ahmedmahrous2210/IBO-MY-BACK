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
        Schema::create('iboiptv_ibo_player_servers', function (Blueprint $table) {
            $table->id();
            $table->string('domain_name');
            $table->string('domain_id');
            $table->string('domain_url');
            $table->integer('status');
            $table->foreignId('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iboiptv_ibo_player_servers');
    }
};
