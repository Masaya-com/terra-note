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
        Schema::create('world_heritage_sites', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("country");
            $table->integer("year_inscribed");
            $table->string("criteria");
            $table->string("special_features")->nullable();
            $table->string("image_path");
            $table->text("description");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('world_heritage_sites');
    }
};
