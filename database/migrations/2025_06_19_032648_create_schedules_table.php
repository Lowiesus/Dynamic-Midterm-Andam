<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->string('day_of_week'); // ✅ Add this
            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->id();
            $table->string('day_of_the_week')->comment('day of the week for the schedule')->max(10);
            $table->dateTime('time_slot')->comment('time slot for the schedule');
            $table->string('room')->comment('room where the schedule takes place')->max(20);
            $table->integer('term')->comment('term of the schedule');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
