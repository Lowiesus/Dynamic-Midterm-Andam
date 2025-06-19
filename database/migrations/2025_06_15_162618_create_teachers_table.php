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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();

            // Foreign key linking to the users table
            $table->unsignedBigInteger('user_id');

            $table->string('first_name', 255)->comment('teacher first name');
            $table->string('last_name', 255)->comment('teacher last name');
            $table->string('email', 50)->comment('teacher email');
            $table->string('department', 10)->comment('teacher department');
            $table->date('birthday')->comment('teacher date of birth');

            $table->timestamps(); // created_at and updated_at

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
