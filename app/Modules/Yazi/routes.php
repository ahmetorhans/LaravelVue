<?php 


Route::group(['prefix' => 'yazi', 'namespace' => 'App\Modules\Yazi\Controllers'], function () {
	Route::get('/', ['as' => 'yazi.index', 'uses' => 'IndexController@index']);
	
});