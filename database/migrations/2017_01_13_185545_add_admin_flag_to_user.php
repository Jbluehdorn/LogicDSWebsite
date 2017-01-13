<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAdminFlagToUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Creates a flag for users that are admins
        Schema::table('users', function(Blueprint $table) {
           $table->boolean('isAdmin')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Removes the flag for users that are admins
        Schema::table('users', function(Blueprint $table) {
           $table->dropColumn('isAdmin');
        });
    }
}
