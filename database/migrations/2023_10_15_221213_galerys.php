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
        Schema::create('galerys', function (Blueprint $table) {
            $table->id();
            $table->text('photo');
            $table->text('text1')->nullable();
            $table->text('client')->nullable();
            $table->text('category')->nullable();
            $table->text('date')->nullable();
            $table->text('mechanic')->nullable();
            $table->text('text2')->nullable();
            $table->text('short_text')->nullable();
            $table->text('filter')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galerys');
    }
};
