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
            $table->string('project_title');
            $table->unsignedBigInteger('sector_id');
            $table->unsignedBigInteger('phase_id');
            $table->string('location');
            $table->string('value');
            $table->date('last_update')->nullable();
            $table->text('project_need');
            $table->text('description_of_asset');
            $table->text('description_of_service');
            $table->text('rationale_for_selection');
            $table->text('stakeholder_consultations');
            $table->string('slug')->unique();

            $table->foreign('sector_id')->references('id')->on('sectors')->onDelete('cascade');
            $table->foreign('phase_id')->references('id')->on('phases')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('slug');
            $table->dropColumn('location');
            $table->dropColumn('project_title');
            $table->dropColumn('sector_id');
            $table->dropColumn('phase_id');
            $table->dropColumn('value');
            $table->dropColumn('last_update');
            $table->dropColumn('project_need');
            $table->dropColumn('description_of_asset');
            $table->dropColumn('description_of_service');
            $table->dropColumn('rationale_for_selection');
            $table->dropColumn('stakeholder_consultations');

            $table->dropForeign(['sector_id','phase_id']);
        });
    }
};
