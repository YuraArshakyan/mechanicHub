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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->text('photo');
            $table->text('name')->nullable();
            $table->text('comment')->nullable();
            $table->text('service')->nullable();
            $table->text('car')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
/*
 * <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
/*public function up(): void
{
    Schema::create('faqs', function (Blueprint $table) {
        $table->id();
        $table->text('question');
        $table->text('answer');
        $table->timestamps();
    });
}

/**
 * Reverse the migrations.
 */
/*public function down(): void
{
    Schema::dropIfExists('faqs');
}
};
*/
