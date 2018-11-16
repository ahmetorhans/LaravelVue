<?php 


Route::group(['prefix' => 'ayarlar', 'namespace' => 'App\Modules\Ayarlar\Controllers'], function () {
	Route::get('/', ['as' => 'module-one.index', 'uses' => 'IndexController@index']);
	Route::get('model-test', ['as' => 'module-one.modelTest', 'uses' => 'IndexController@modelTest']);
});