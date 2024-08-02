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
        Schema::table('projects', function (Blueprint $table) {
            if (!Schema::hasColumn('projects', 'lga_id')) {
                $table->unsignedBigInteger('lga_id');
                $table->foreign('lga_id')->references('id')->on('lgas')->onDelete('cascade');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            if (Schema::hasColumn('projects', 'lga_id')) {
                $table->dropForeign(['lga_id']);
                $table->dropColumn('lga_id');
            }
        });
    }
};
