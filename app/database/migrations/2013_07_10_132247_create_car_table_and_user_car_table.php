<?php

use Illuminate\Database\Migrations\Migration;

class CreateCarTableAndUserCarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cars', function($table){
			$table->increments('id');
			$table->string('name');
			$table->timestamps();
		});
		Schema::create('car_user', function($table){
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('car_id')->unsigned();
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
		Schema::drop('cars');
		Schema::drop('car_user');
	}

}