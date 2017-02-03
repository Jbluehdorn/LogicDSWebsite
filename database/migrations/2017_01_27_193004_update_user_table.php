<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table) {
            $table->string('firstName')->default('');
            $table->string('lastName')->default('');
            $table->date('birthDate');
        });

        Schema::table('staff', function(Blueprint $table) {
            $table->dropColumn('firstName');
            $table->dropColumn('lastName');
            $table->string('location')->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table) {
            $table->dropColumn('firstName');
            $table->dropColumn('lastName');
            $table->dropColumn('birthDate');
        });

        Schema::table('staff', function(Blueprint $table) {
            $table->string('firstName');
            $table->string('lastName');
            $table->dropColumn('location');
        });
    }
}
