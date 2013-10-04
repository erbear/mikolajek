<?php
class UserTableSeeder extends Seeder {
	public function run()
	{
		$user = new User;
		$user->name = 'Bartek';
		$user->password = Hash::make('haslo');
		$company = Company::find(1);
		$user->save();

	}
	    	
}