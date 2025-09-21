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
            $table->dropColumn('validation_status');
            $table->foreignId('status_id')->nullable()->after('validation_status')->constrained('counselor_statuses')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('counselors', function (Blueprint $table) {
            $table->string('validation_status', 50)->after('degree');
            $table->dropForeign(['status_id']);
            $table->dropColumn('status_id');
        });
    }
};
