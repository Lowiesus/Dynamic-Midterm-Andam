<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('subject')->unique()->comment('name of the subject')->max(50);
            $table->string('course_code')->unique()->comment('code of the course')->max(10);
            $table->integer('credits')->comment('worth of credits');
            $table->text('description')->nullable()->comment('description')->max(255);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
