<?php

use App\Models\Enums\MachineryBrandEnum;
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
        Schema::create('machineries', function (Blueprint $table) {
            $table->id();
            $table->string('eco');
            $table->string('serial');
            $table->string('brand');
            $table->string('model');
            $table->string('description')->nullable();
            $table->decimal('horometer',18,18);
            $table->dateTime('model_year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('machineries');
    }
};
