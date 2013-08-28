<?php

use Illuminate\Database\Migrations\Migration;

class Init extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        //create user table
        Schema::create('users', function ($table) {
            $table->increments('id')->index()->unsigned();
            $table->string('email', 1000);
            $table->string('password', 1000);
            $table->timestamps();
        });

        //create roles table
        Schema::create('roles', function ($table) {
            $table->increments('id')->index()->unsigned();
            $table->string('name');
            $table->timestamps();
        });

        //create Users Roles table
        Schema::create('role_user', function ($table) {
            $table->increments('id')->index()->unsigned();
            $table->integer('user_id')->index()->unsigned();
            $table->integer('role_id')->index()->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade')->onUpdate('cascade');
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
        //
        Schema::table('role_user', function ($table) {
            $table->dropForeign('role_user_user_id_foreign');
            $table->dropForeign('role_user_role_id_foreign');
        });

        Schema::drop('role_user');
        Schema::drop('roles');
        Schema::drop('users');
    }

}