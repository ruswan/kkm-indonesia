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
        Schema::table('counselors', function (Blueprint $table) {
            $table->dropColumn('province');
            $table->dropColumn('city');
            $table->foreignId('province_id')->after('degree')->constrained('provinces')->onDelete('cascade');
            $table->foreignId('regency_id')->after('province_id')->constrained('regencies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('counselors', function (Blueprint $table) {
            $table->string('province', 100)->after('degree');
            $table->string('city', 100)->after('province');
            $table->dropForeign(['province_id']);
            $table->dropForeign(['regency_id']);
            $table->dropColumn('province_id');
            $table->dropColumn('regency_id');
        });
    }
};
