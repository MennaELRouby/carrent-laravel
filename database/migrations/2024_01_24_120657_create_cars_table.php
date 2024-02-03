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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title', 100);
            $table->text('content', 1000);
            $table->string('luggage', 100);
            $table->string('doors', 100);
            $table->string('passengers', 100);
            $table->string('price', 100);
            $table->boolean('published');
            $table->string('image', 100);
            $table->foreignId('cat_id')->constrained('categories')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
