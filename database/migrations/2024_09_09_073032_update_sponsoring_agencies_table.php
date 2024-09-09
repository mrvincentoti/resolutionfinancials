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
        Schema::table('sponsoring_agencies', function (Blueprint $table) {
            $table->string('top_tag')->after('project_id');
            $table->text('description')->after('title');
            $table->string('point_one');
            $table->string('point_two');
            $table->string('point_three');
            $table->string('point_four');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sponsoring_agencies', function (Blueprint $table) {
            $table->dropColumn('top_tag');
            $table->dropColumn('description');
            $table->dropColumn('point_one');
            $table->dropColumn('point_two');
            $table->dropColumn('point_three');
            $table->dropColumn('point_four');
        });
    }
};
