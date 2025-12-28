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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->foreignId('departament_id');
            $table->string('name');
            $table->integer('hierarchy');
            $table->decimal('salary',18,4);
            $table->string('category');
            $table->integer('rank');
            $table->integer('permissions_group');
            $table->boolean('can_approve_machinery_assignations');
            $table->boolean('can_approve_projects');
            $table->boolean('active');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
