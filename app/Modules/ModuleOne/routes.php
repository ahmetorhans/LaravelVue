<?php 


Route::group(['prefix' => 'module-one', 'namespace' => 'App\Modules\ModuleOne\Controllers'], function () {
	Route::get('/', ['as' => 'module-one.index', 'uses' => 'IndexController@index']);
	Route::get('model-test', ['as' => 'module-one.modelTest', 'uses' => 'IndexController@modelTest']);
});