<?php
class Company extends Eloquent
{
	protected $fillable = array('name');

	protected $table = 'companies';
	
	public function users()
	{
		return $this->hasMany('User');
	}
}
