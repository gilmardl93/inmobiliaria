<?php

Route::group(['namespace' => 'Admin'], function(){

	Route::group(['namespace' => 'Propiedades'], function(){
		Route::get('proyectos','ProyectosController@index')->name('admin.proyectos.index');
		Route::get('proyectos-data','ProyectosController@list')->name('admin.proyectos.list');
		Route::get('proyectos-crear','ProyectosController@create')->name('admin.proyectos.create');
		Route::post('proyectos-registrar','ProyectosController@store')->name('admin.proyectos.store');
		Route::get('proyectos-editar/{id}','ProyectosController@edit')->name('admin.proyectos.edit');
		Route::post('proyectos-actualizar','ProyectosController@update')->name('admin.proyectos.update');
		Route::get('proyectos-eliminar/{id}','ProyectosController@delete')->name('admin.proyectos.delete');
	});

});
