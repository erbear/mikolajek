<?php

use Illuminate\Database\Migrations\Migration;

class CreatePhotosPolymorphicTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('photos', function($table){
			$table->increments('id');
			$table->integer('photoable_id')->unsigned;
			$table->string('photoable_type');
			$table->string('path');
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
		Schema::drop('photos');
	}

}