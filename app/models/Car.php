<?php
class Car extends Eloquent
{
	public function users()
	{
		return $this->belongsToMany('User');
	}
	public function photos()
	{
		
	}
	    	
}
