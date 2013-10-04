<?php
class Photo extends Eloquent
{
	public function photoable()
	{
		return $this->morphTo();
	}
	    	
}
