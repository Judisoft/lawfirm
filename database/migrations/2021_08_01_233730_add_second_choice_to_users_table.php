<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSecondChoiceToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('institution_2')->nullable();
            $table->string('faculty_2')->nullable();
            $table->string('department_2')->nullable();
            $table->string('degree_2')->nullable();
            $table->string('institution_3')->nullable();
            $table->string('faculty_3')->nullable();
            $table->string('department_3')->nullable();
            $table->string('degree_3')->nullable();
            $table->string('disability')->nullable();
            
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
