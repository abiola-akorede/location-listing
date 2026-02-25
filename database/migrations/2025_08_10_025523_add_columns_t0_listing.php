<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsT0Listing extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('listing', function (Blueprint $table) {
            $table->decimal('required_amount', 10, 2)->nullable()->after('price'); 
            $table->decimal('roi', 5, 2)->nullable()->after('required_amount');
            $table->string('project_duration')->nullable()->after('roi'); 
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
            $table->dropColumn(['required_amount', 'roi', 'project_duration'])
        ->nullable();
        });
    }
}
