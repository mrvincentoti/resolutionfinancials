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
        Schema::table('banners', function (Blueprint $table) {
            $table->string('slug')->unique(); // Add a new column
            // $table->dropColumn('status'); // Example to drop a column
            // $table->renameColumn('old_name', 'new_name'); // Example to rename a column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('banners', function (Blueprint $table) {
            $table->dropColumn('slug'); // Remove the column if rolling back
            // $table->string('status')->default('inactive'); // Revert changes if needed
            // $table->renameColumn('new_name', 'old_name'); // Revert column rename if needed
        });
    }
};
