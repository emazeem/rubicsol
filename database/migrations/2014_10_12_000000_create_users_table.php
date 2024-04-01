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
            $table->string('fname');
            $table->string('lname');
            $table->string('role')->default('super-admin');
            $table->string('email');
            $table->string('designation');
            $table->string('department');
            $table->string('phone');
            $table->string('joining');
            $table->string('address');
            $table->string('bank');
            $table->string('account');
            $table->string('cnic_no');
            $table->string('profile')->nullable();
            $table->string('cv')->nullable();
            $table->string('cnic')->nullable();
            $table->timestamp('email_verified_at')->nullable()->unique();
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
