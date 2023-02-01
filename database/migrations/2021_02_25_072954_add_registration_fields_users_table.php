<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRegistrationFieldsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('name','firstname');
            $table->string('lastname');
            $table->string('username');
            $table->string('phone')->nullable();
            $table->boolean('connect_with_users')->default(false);
            $table->text ('info')->nullable();
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
            $table->renameColumn('firstname','name');
            $table->dropColumn(['lastname', 'username', 'phone', 'connect_with_users', 'info']);
        });
    }
}
