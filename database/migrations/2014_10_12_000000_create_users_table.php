<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('first_name', 255);
            $table->string('middle_name', 255)->nullable();
            $table->string('last_name', 255);
            $table->string('email', 100)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_active')->index();
            $table->string('password');
            $table->string('avatar')->nullable();
            $table->dateTime('last_login_at')->nullable();
            $table->ipAddress('last_login_ip')->nullable();
            $table->morphs('profile');
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
