<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tp_crime', function (Blueprint $table) {
            $table->id();
            $table->string('result');
            $table->string('description');
            $table->boolean('has_options')->default(false);
            $table->boolean('has_modifiers')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tp_crime');
    }
};
