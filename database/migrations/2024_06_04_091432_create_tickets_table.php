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
        Schema::create('tickets', function (Blueprint $table) {
            
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('status')->default('1');
            $table->unsignedBigInteger('created_by');
            $table->foreignId('attended_by')->nullable();
            $table->dateTime('attended_at')->nullable();
            $table->string('admin_comment')->nullable();
            $table->foreignId('updated_by')->nullable();
            $table->timestamps();
            $table->foreign('created_by')->references('id')->on('ibocdn_resellers');
            $table->foreign('attended_by')->references('id')->on('ibocdn_resellers')->nullOnDelete();
        }
    );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
