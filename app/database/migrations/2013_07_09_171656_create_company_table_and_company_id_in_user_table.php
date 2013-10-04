<?php

use Illuminate\Database\Migrations\Migration;

class CreateCompanyTableAndCompanyIdInUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('companies', function($table){
			$table->increments('id');
			$table->string('name');
			$table->timestamps();
		});
		Schema::table('users', function($table){
			$table->integer('company_id')->after('password')->nullable()->unsigned();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function($table){
			$table->dropColumn('company_id');
		});
		Schema::drop('companies');
	}

}