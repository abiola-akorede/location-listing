<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToListing extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('listing', function (Blueprint $table) {
            $table->string('feature1')->after('feature_1')->nullable();
            $table->string('feature2')->after('feature_2')->nullable();
            $table->string('feature3')->after('feature_3')->nullable();
            $table->string('feature4')->after('feature_4')->nullable();
            $table->string('feature5')->after('feature_5')->nullable();
            $table->string('feature6')->after('feature_6')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('listing', function (Blueprint $table) {
            $table->dropColumn('feature1');
            $table->dropColumn('feature2');
            $table->dropColumn('feature3');
            $table->dropColumn('feature4');
            $table->dropColumn('feature5');
            $table->dropColumn('feature6');
        });
    }
}
