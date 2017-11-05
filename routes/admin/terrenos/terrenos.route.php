<?php

Route::group(['namespace' => 'Admin'], function(){

	Route::group(['namespace' => 'Propiedades'], function(){
		Route::get('terrenos','TerrenosController@index')->name('admin.terrenos.index');
		Route::get('terrenos-data','TerrenosController@list')->name('admin.terrenos.list');
		Route::get('terrenos-crear','TerrenosController@create')->name('admin.terrenos.create');
		Route::post('terrenos-registrar','TerrenosController@store')->name('admin.terrenos.store');
		Route::get('terrenos-editar/{id}','TerrenosController@edit')->name('admin.terrenos.edit');
		Route::post('terrenos-actualizar','TerrenosController@update')->name('admin.terrenos.update');
		Route::get('terrenos-eliminar/{id}','TerrenosController@delete')->name('admin.terrenos.delete');
	});

});
