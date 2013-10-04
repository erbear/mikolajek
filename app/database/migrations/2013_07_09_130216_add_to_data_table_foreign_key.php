<?php

use Illuminate\Database\Migrations\Migration;

class AddToDataTableForeignKey extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('datas', function($table){
			$table->foreign('user_id')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('datas', function($table){
			$table->dropForeign('datas_user_id_foreign');
		});
		
	}

}