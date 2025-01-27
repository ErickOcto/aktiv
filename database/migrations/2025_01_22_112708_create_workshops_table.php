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
        Schema::create('workshops', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('thumbnail');
            $table->string('venue_thumbnail');
            $table->text('about');
            $table->integer('price');
            $table->foreignId('category_id')->constrained();
            $table->date('start_at');
            $table->time('time_at');
            $table->foreignId('workshop_instructor_id')->constrained();
            $table->text('address');
            $table->string('bg_map');
            $table->boolean('is_open');
            $table->boolean('has_started');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workshops');
    }
};
