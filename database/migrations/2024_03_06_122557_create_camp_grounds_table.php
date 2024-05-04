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
        Schema::create('camp_grounds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('country');
            $table->string('city');
            $table->string('region');
            $table->integer('cm_type')->default("0");//  جبل-0 - صحراء-1 -   -2 - غابة
            $table->integer('cm_season')->default("3");// spring 1 - summer  2 - fall 3 - winter 0
            $table->string('campGround_image',300)->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('camp_grounds');
    }
};
