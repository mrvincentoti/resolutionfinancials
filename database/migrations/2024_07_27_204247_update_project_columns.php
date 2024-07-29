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
            $table->string('location')->nullable()->change();
            $table->string('value')->nullable()->change();
            $table->text('project_need')->nullable()->change();
            $table->text('description_of_asset')->nullable()->change();
            $table->text('description_of_service')->nullable()->change();
            $table->text('rationale_for_selection')->nullable()->change();
            $table->text('stakeholder_consultations')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->string('location')->nullable(false)->change();
            $table->string('value')->nullable(false)->change();
            $table->string('project_need')->nullable(false)->change();
            $table->string('description_of_asset')->nullable(false)->change();
            $table->string('description_of_service')->nullable(false)->change();
            $table->string('rationale_for_selection')->nullable(false)->change();
            $table->string('stakeholder_consultations')->nullable(false)->change();
        });
    }
};
