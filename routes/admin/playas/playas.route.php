<?php

Route::group(['namespace' => 'Admin'], function(){

	Route::group(['namespace' => 'Propiedades'], function(){
		Route::get('playas','PlayasController@index')->name('admin.playas.index');
		Route::get('playas-data','PlayasController@list')->name('admin.playas.list');
		Route::get('playas-crear','PlayasController@create')->name('admin.playas.create');
		Route::post('playas-registrar','PlayasController@store')->name('admin.playas.store');
		Route::get('playas-editar/{id}','PlayasController@edit')->name('admin.playas.edit');
		Route::post('playas-actualizar','PlayasController@update')->name('admin.playas.update');
		Route::get('playas-eliminar/{id}','PlayasController@delete')->name('admin.playas.delete');
	});

});
