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
        Schema::table('universities', function (Blueprint $table) {
            $table->string('dli_number')->nullable()->after('status');
            $table->string('institution_type')->nullable()->after('dli_number');
            $table->string('founded_year')->nullable()->after('institution_type');
            $table->text('why_your_institution')->nullable()->after('founded_year');
            $table->string('google_map_location')->nullable()->after('why_your_institution');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('universities', function (Blueprint $table) {
            $table->dropColumn('why_your_institution');
            $table->dropColumn('founded_year');
            $table->dropColumn('institution_type');
            $table->dropColumn('dli_number');
        });
    }
};
