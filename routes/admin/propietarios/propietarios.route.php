<?php

Route::group(['namespace' => 'Admin'], function(){

	Route::group(['namespace' => 'Propiedades'], function(){
		Route::get('propietarios','PropietariosController@index')->name('admin.propietarios.index');
		Route::get('propietarios-data','PropietariosController@list')->name('admin.propietarios.list');
		Route::get('propietarios-crear','PropietariosController@create')->name('admin.propietarios.create');
		Route::post('propietarios-registrar','PropietariosController@store')->name('admin.propietarios.store');
		Route::get('propietarios-editar/{id}','PropietariosController@edit')->name('admin.propietarios.edit');
		Route::post('propietarios-actualizar','PropietariosController@update')->name('admin.propietarios.update');
		Route::get('propietarios-eliminar/{id}','PropietariosController@delete')->name('admin.propietarios.delete');
	});

});
