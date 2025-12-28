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
        Schema::create('machinery_assignations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('operator_id')->references('id')->on('personals');
            $table->foreignId('machinery_id');
            $table->integer('rh_supervisor');
            $table->integer('maintenance_coordinator');
            $table->string('details');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('machinery_assignations');
    }
};
