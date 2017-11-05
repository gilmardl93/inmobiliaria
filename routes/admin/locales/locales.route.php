<?php

Route::group(['namespace' => 'Admin'], function(){

	Route::group(['namespace' => 'Propiedades'], function(){
		Route::get('locales','LocalesController@index')->name('admin.locales.index');
		Route::get('locales-data','LocalesController@list')->name('admin.locales.list');
		Route::get('locales-crear','LocalesController@create')->name('admin.locales.create');
		Route::post('locales-registrar','LocalesController@store')->name('admin.locales.store');
		Route::get('locales-editar/{id}','LocalesController@edit')->name('admin.locales.edit');
		Route::post('locales-actualizar','LocalesController@update')->name('admin.locales.update');
		Route::get('locales-eliminar/{id}','LocalesController@delete')->name('admin.locales.delete');
	});

});
