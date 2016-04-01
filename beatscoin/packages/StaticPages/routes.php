<?php 
Route::group(['middleware' => ['web']], function () {
    //
});

Route::get('{page}.html', function($page){
	return view('pages::'.$page);
});