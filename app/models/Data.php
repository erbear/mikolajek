<?php
class Data extends Eloquent
{
	protected $fillable = array('email', 'tel');
	
	protected $table = 'datas';
	public function user()
    {
        return $this->belongsTo('User');
    }
}
