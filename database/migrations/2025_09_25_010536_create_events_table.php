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
        Schema::create('events', function (Blueprint $table) {
            $table->uuid('code')->primary(); // Campo 'code' será a chave primária única e gerada via UUID
            $table->string('name', 150);
            $table->string('location', 150);
            $table->string('description', 500)->nullable();
            $table->dateTime('startDate');
            $table->dateTime('endDate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
