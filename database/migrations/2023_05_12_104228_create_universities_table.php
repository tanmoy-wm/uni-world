<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
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
            $table->string('country', 255)->index();
            $table->string('pincode', 255)->index();
            $table->string('status')->index()->comment('Approve, Reject, Pending');
            $table->longText('meta')->nullable();
            $table->string('website', 255)->index()->nullable;
            $table->string('linkedin', 255)->index()->nullable;
            $table->string('facebook', 255)->index()->nullable;
            $table->string('instagram', 255)->index()->nullable;
            $table->string('twitter', 255)->index()->nullable;


            // $table->unsignedBigInteger('created_by')->nullable();
            // $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
            // $table->index('created_by');

            // $table->unsignedBigInteger('updated_by')->nullable();
            // $table->foreign('updated_by')->references('id')->on('users')->onDelete('set null');
            // $table->index('updated_by');

            // $table->unsignedBigInteger('deleted_by')->nullable();
            // $table->foreign('deleted_by')->references('id')->on('users')->onDelete('set null');
            // $table->index('deleted_by');

            // $table->foreignId('universities_created_by_foreign')->index()->nullable()->constrained('users')->onDelete('set null');
            // $table->foreignId('universities_updated_by_foreign')->index()->nullable()->constrained('users')->onDelete('set null');
            // $table->foreignId('universities_deleted_by_foreign')->index()->nullable()->constrained('users')->onDelete('set null');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('universities');
    }
};
