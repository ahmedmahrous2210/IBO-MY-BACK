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
        Schema::create('ibocdn_resellers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email');
            $table->string('password');
            $table->integer('status');
            $table->date('expiry_date')->nullable();
            $table->bigInteger('credit_point')->default('0');
            $table->string('masa_credit_point')->nullable();
            $table->foreignId('created_by');
            $table->integer('parent_reseller_id')->default('0');
            $table->foreignId('updated_by')->nullable();
            $table->integer('group_id')->nullable()->default('2');
            $table->string('application_allowed')->nullable();
            $table->longText('web_logo')->nullable();
            $table->string('web_title')->nullable();
            $table->dateTime('last_login_time')->nullable();
            $table->string('login_ip')->nullable();
            $table->integer('is_verified')->nullable()->default('0');
            $table->string('verification_token')->nullable();
            $table->dateTime('verify_at')->nullable();
            $table->integer('is_disable_by_admin')->default('0');
            $table->string('credit_share_passcode')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ibocdn_resellers');
    }
};
