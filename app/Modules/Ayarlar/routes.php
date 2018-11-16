<?php 


Route::group(['prefix' => 'ayarlar', 'namespace' => 'App\Modules\Ayarlar\Controllers'], function () {
	Route::get('/', ['as' => 'ayarlar.index', 'uses' => 'IndexController@index']);
	Route::get('test', ['as' => 'ayarlar.test', 'uses' => 'IndexController@test']);
});