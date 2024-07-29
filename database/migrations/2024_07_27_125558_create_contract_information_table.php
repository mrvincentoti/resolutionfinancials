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
        Schema::create('contract_information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id');
            $table->string('redacted_ppp_agreement')->nullable();
            $table->string('financial_structure')->nullable();
            $table->string('risk')->nullable();
            $table->string('government_support')->nullable();
            $table->string('tariff')->nullable();
            $table->string('termination_provisions')->nullable();
            $table->string('renegotiations')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contract_information');
    }
};
