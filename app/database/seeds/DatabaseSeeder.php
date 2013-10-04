<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call('CompanyTableSeeder');
		$this->call('UserTableSeeder');
		$this->call('DataTableSeeder');

        $this->command->info('User table seeded!');
	}

}