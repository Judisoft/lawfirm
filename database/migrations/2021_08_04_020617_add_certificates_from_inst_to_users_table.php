<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCertificatesFromInstToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('certificate_from_previous_inst1')->nullable();
            $table->string('certificate_from_previous_inst2')->nullable();
            $table->string('certificate_from_previous_inst3')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inst_to_users', function (Blueprint $table) {
            //
        });
    }
}
