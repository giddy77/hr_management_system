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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('alt_phone');
            $table->string('date_joined');
            $table->string('address');
            $table->string('staff_no')->unique();
            $table->string('emp_status');
            $table->string('nationality')->nullable();
            $table->string('status')->nullable();
            $table->integer('role');
            $table->integer('manager_id');
            $table->string('review_id');
            $table->string('photo');
            $table->string('age');
            $table->string('gender');
            $table->foreignId('department_id')->cascadeOnDelete();
            $table->string('position_id')->constrained()->cascadeOnDelete();
            $table->foreignId('job_id')->nullable();//->constrained()->onDelete('cascade');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
