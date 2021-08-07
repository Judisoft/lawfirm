<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCompletionDatesToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('previous_inst1_from')->nullable();
            $table->string('previous_inst2_from')->nullable();
            $table->string('previous_inst3_from')->nullable();
            $table->string('previous_inst1_to')->nullable();
            $table->string('previous_inst2_to')->nullable();
            $table->string('previous_inst3_to')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
