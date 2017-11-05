<?php

Route::group(['namespace' => 'Admin'], function(){

	Route::group(['namespace' => 'Propiedades'], function(){
		Route::get('oficinas','OficinasController@index')->name('admin.oficinas.index');
		Route::get('oficinas-data','OficinasController@list')->name('admin.oficinas.list');
		Route::get('oficinas-crear','OficinasController@create')->name('admin.oficinas.create');
		Route::post('oficinas-registrar','OficinasController@store')->name('admin.oficinas.store');
		Route::get('oficinas-editar/{id}','OficinasController@edit')->name('admin.oficinas.edit');
		Route::post('oficinas-actualizar','OficinasController@update')->name('admin.oficinas.update');
		Route::get('oficinas-eliminar/{id}','OficinasController@delete')->name('admin.oficinas.delete');
	});

});
