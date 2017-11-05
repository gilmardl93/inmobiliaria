<?php

Route::group(['namespace' => 'Admin'], function(){

	Route::group(['namespace' => 'Propiedades'], function(){
		Route::get('departamentos','DepartamentosController@index')->name('admin.departamentos.index');
		Route::get('departamentos-data','DepartamentosController@list')->name('admin.departamentos.list');
		Route::get('departamentos-crear','DepartamentosController@create')->name('admin.departamentos.create');
		Route::post('departamentos-registrar','DepartamentosController@store')->name('admin.departamentos.store');
		Route::get('departamentos-editar/{id}','DepartamentosController@edit')->name('admin.departamentos.edit');
		Route::post('departamentos-actualizar','DepartamentosController@update')->name('admin.departamentos.update');
		Route::get('departamentos-eliminar/{id}','DepartamentosController@delete')->name('admin.departamentos.delete');
	});

});
