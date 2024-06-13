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
        Schema::create('reseller_applications', function (Blueprint $table) {
            $table->id();
            $table->integer('app_id');
            $table->integer('reseller_id');
            $table->string('app_name');
            $table->string('app_logo');
            $table->string('app_phone');
            $table->string('app_email');
            $table->string('app_place_location')->nullable();
            $table->integer('status')->default('1');
            $table->string('app_tag_line')->nullable();
            $table->string('app_description');
            $table->foreignId('created_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reseller_applications');
    }
};
