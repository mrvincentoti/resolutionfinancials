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
            if (Schema::hasColumn('projects', 'location')) {
                $table->string('location')->nullable()->change();
            }
            if (Schema::hasColumn('projects', 'value')) {
                $table->string('value')->nullable()->change();
            }
            if (Schema::hasColumn('projects', 'project_need')) {
                $table->text('project_need')->nullable()->change();
            }
            if (Schema::hasColumn('projects', 'description_of_asset')) {
                $table->text('description_of_asset')->nullable()->change();
            }
            if (Schema::hasColumn('projects', 'description_of_service')) {
                $table->text('description_of_service')->nullable()->change();
            }
            if (Schema::hasColumn('projects', 'rationale_for_selection')) {
                $table->text('rationale_for_selection')->nullable()->change();
            }
            if (Schema::hasColumn('projects', 'stakeholder_consultations')) {
                $table->text('stakeholder_consultations')->nullable()->change();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            if (Schema::hasColumn('projects', 'location')) {
                $table->string('location')->nullable(false)->change();
            }
            if (Schema::hasColumn('projects', 'value')) {
                $table->string('value')->nullable(false)->change();
            }
            if (Schema::hasColumn('projects', 'project_need')) {
                $table->text('project_need')->nullable(false)->change();
            }
            if (Schema::hasColumn('projects', 'description_of_asset')) {
                $table->text('description_of_asset')->nullable(false)->change();
            }
            if (Schema::hasColumn('projects', 'description_of_service')) {
                $table->text('description_of_service')->nullable(false)->change();
            }
            if (Schema::hasColumn('projects', 'rationale_for_selection')) {
                $table->text('rationale_for_selection')->nullable(false)->change();
            }
            if (Schema::hasColumn('projects', 'stakeholder_consultations')) {
                $table->text('stakeholder_consultations')->nullable(false)->change();
            }
        });
    }
};
