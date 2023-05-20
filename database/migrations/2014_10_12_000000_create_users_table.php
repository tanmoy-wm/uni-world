<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 255)->index()->nullable();
            $table->string('middle_name', 255)->index()->nullable();
            $table->string('last_name', 255)->index()->nullable();
            $table->string('university_name', 255)->index()->nullable()->comment('we store only university name');
            $table->string('email', 100)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_active')->index()->nullable();
            $table->string('password')->nullable();
            $table->string('social_type')->nullable();
            $table->string('social_id')->nullable();
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
