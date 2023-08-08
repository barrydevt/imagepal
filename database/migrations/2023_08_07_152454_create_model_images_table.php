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
        Schema::create('model_images', function (Blueprint $table) {
            $table->id();
            $table->morphs('model');
            $table->string('filename');
            $table->string('filetype');
            $table->text('description')->nullable();
            $table->string('group');
            $table->integer('position')->default(0);
            $table->boolean('enabled')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('model_images');
    }
};
