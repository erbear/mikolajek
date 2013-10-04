<?php
class CompanyTableSeeder extends Seeder {
	public function run()
	{
		Company::create(array(
				'name'=>'Apple',
			));
		Company::create(array(
				'name'=>'Microsoft',
			));
	}
	    	
}