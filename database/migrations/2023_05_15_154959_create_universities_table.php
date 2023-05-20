<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('universities', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->index();
            $table->string('username', 255)->index()->unique();
            $table->string('email', 255)->index()->unique();
            $table->string('password', 255)->index();
            $table->string('country_code', 255)->index();
            $table->string('mobile_number', 255)->index();
            $table->string('alt_country_code', 255)->index();
            $table->string('alt_mobile_number', 255)->index()->nullable;
            $table->string('address', 255);
            $table->string('city', 255)->index();
            $table->string('state', 255)->index();
            $table->string('country', 255)->index();
            $table->string('pincode', 255)->index();
            $table->string('status')->index()->comment('Approve, Reject, Pending');
            $table->string('dli_number')->nullable();
            $table->string('institution_type')->nullable();
            $table->string('founded_year')->nullable();
            $table->text('why_your_institution')->nullable();
            $table->string('google_map_location')->nullable();
            $table->longText('meta')->nullable();
            $table->string('website', 255)->index()->nullable;
            $table->string('linkedin', 255)->index()->nullable;
            $table->string('facebook', 255)->index()->nullable;
            $table->string('instagram', 255)->index()->nullable;
            $table->string('twitter', 255)->index()->nullable;

            $table->unsignedBigInteger('created_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users')->nullOnDelete();
            $table->index('created_by');

            $table->unsignedBigInteger('updated_by')->nullable();
            $table->foreign('updated_by')->references('id')->on('users')->nullOnDelete();
            $table->index('updated_by');

            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->foreign('deleted_by')->references('id')->on('users')->nullOnDelete();
            $table->index('deleted_by');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('universities');
    }
};
