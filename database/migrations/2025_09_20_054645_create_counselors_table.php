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
        Schema::create('counselors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('registration_number', 50);
            $table->string('degree', 50);
            $table->string('province', 100);
            $table->string('city', 100);
            $table->string('whatsapp_number', 20);
            $table->string('contact_email', 150);
            $table->string('profile_photo', 255)->nullable();
            $table->string('instagram_link', 255)->nullable();
            $table->string('tiktok_link', 255)->nullable();
            $table->string('facebook_link', 255)->nullable();
            $table->enum('validation_status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('counselors');
    }
};
