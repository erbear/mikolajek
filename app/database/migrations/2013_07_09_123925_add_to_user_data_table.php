<?php

use Illuminate\Database\Migrations\Migration;

class AddToUserDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('datas', function($table){
			$table->increments('id');
			$table->string('email');
			$table->string('tel');
			$table->integer('user_id')->unsigned();
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
		Schema::drop('datas');
	}

}