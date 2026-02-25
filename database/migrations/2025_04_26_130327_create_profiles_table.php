<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('Surname')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('state_of_origin')->nullable();
            $table->string('local_govt')->nullable();
            $table->string('gender')->nullable();
            $table->string('occupation')->nullable();
            $table->string('bvn')->nullable();
            $table->string('passport')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('name_next_of_kin')->nullable();
            $table->string('addy_next_of_kin')->nullable();
            $table->string('email_of_next_of_kin')->nullable();
            $table->string('phone_next_of_kin')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
