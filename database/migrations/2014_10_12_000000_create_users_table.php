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
            $table->char('cpf', 11)->unique();
            $table->string('email')->unique();
            $table->string('username')->unique()->nullable();
            $table->string('full_name');
            $table->string('name');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone_number');
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
