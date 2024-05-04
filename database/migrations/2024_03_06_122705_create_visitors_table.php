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
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('work');
            $table->string('hobby');
            $table->string('nationality');
            $table->string('current_location');

            $table->boolean('gender')->default(false);
            $table->boolean('is_phobia_dark');
            $table->boolean('is_phobia_animals');
            $table->boolean('is_phobia_fly');
            $table->boolean('is_phobia_see');
            $table->boolean('is_phobia_open_space');
            $table->boolean('is_phobia_hights');

            $table->date('birthday');
            $table->integer('num_companion');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitors');
    }
};
