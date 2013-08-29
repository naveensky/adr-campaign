<?php

use Illuminate\Database\Migrations\Migration;

class Init extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        //create user table
        Schema::create('users', function ($table) {
            $table->increments('id')->index()->unsigned();
            $table->string('email', 1000);
            $table->string('password', 1000);
            $table->timestamps();
        });

        Schema::create('campaigns', function ($table) {
            $table->increments('id')->index()->unsigned();
            $table->string('name', 1000);
            $table->string('email', 1000);
            $table->string('mobile', 1000);
            $table->text('address', 1000);
            $table->string('city', 1000);
            $table->string('state', 1000);
            $table->string('category',1000);
            $table->timestamps();
        });



         Schema::create('campaignFiles', function ($table) {
             $table->increments('id')->index()->unsigned();
             $table->integer('campaignId')->index()->unsigned();
             $table->foreign('campaignId')->references('id')->on('campaigns')->onDelete('cascade')->onUpdate('cascade');
             $table->string('path',2000);

             $table->timestamps();
         });


        DB::table('users')->insert(
            array(array('id' => 1,
                'email' => 'admin@admin.com', 'password' => Hash::make('asdf1234'), 'created_at' => new DateTime(), 'updated_at' => new DateTime())
            ));

    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
        Schema::table('campaignFiles', function ($table) {
            $table->dropForeign('campaignfiles_campaignid_foreign');
        });
        Schema::drop('users');
        Schema::drop('campaigns');
        Schema::drop('campaignFiles');

	}

}