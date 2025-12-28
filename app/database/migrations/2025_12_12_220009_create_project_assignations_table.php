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
        Schema::create('project_assignations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id');
            $table->foreignId('machinery_id');
            $table->dateTime('fecha');
            $table->integer('maintenance_manager');
            $table->string('comments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_assignations');
    }
};
