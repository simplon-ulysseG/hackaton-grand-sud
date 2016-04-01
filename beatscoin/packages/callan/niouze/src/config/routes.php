<?php 

Route::group(['middleware' => ['web']], function(){
	Route::controller('actus','\Callan\Niouze\Controllers\NiouzeController');
});