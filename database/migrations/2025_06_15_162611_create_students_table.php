<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Foreign key to users table
            $table->string('first_name', 255)->comment('student first name');
            $table->string('last_name', 255)->comment('student last name');
            $table->string('user_name', 30)->comment('student user name');
            $table->string('password', 255)->comment('student password');
            $table->timestamp('registration_date')->comment('student date of registration');
            $table->timestamps();

            // Define foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
