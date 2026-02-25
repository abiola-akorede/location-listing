<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteFeatureXFromListing extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('listing', function (Blueprint $table) {
            $table->dropColumn('feature_1');
            $table->dropColumn('feature_2');
            $table->dropColumn('feature_3');
            $table->dropColumn('feature_4');
            $table->dropColumn('feature_5');
            $table->dropColumn('feature_6'); 
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
            $table->string('feature_1')->nullable();
            $table->string('feature_2')->nullable();
            $table->string('feature_3')->nullable();
            $table->string('feature_4')->nullable();
            $table->string('feature_5')->nullable();
            $table->string('feature_6')->nullable();
        });
    }
}
