<?php
class DataTableSeeder extends Seeder {
	public function run()
	{
		$user = User::find(1);
		$data = new Data(array(
				'email'=>'ja@gmail.com',
				'tel'=>'234523',
			));
		$data = $user->data()->save($data);
	}
	    	
}