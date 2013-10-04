<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/user/download', function(){
	
		$user = Auth::user();
		return Response::json(array('id'=>'1', 'email'=>'jakis', 'tel'=>'tez jakis'));
});

Route::get('/user/downloads', function(){
	
		$user = Auth::user();
		return Response::json(array(
			array('id'=>'1','email'=>'jakis', 'tel'=>'tez jakis'),
			array('id'=>'2','email'=>'drugi', 'tel'=>'tez drugi')
			));
});
Route::controller('/user', 'UserController');
