<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('institution_name');
            $table->string('institution_type');
            $table->string('region');
            $table->string('city')->nullable();
            $table->string('website');
            $table->string('logo');
            $table->string('registration_fee');
            $table->string('email');
            $table->string('telephone');
            $table->string('om');
            $table->string('momo');
            $table->string('bank_account');
            $table->string('image');
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
        Schema::dropIfExists('institutions');
    }
}
