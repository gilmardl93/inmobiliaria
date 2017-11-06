<?php

Route::group(['namespace' => 'Admin'], function(){

	Route::group(['namespace' => 'Noticias', 'prefix' => 'admin'], function(){
		Route::get('noticias','NoticiasController@index')->name('admin.noticias.index');
		Route::get('noticias-data','NoticiasController@list')->name('admin.noticias.list');
		Route::get('noticias-crear','NoticiasController@create')->name('admin.noticias.create');
		Route::post('noticias-registrar','NoticiasController@store')->name('admin.noticias.store');
		Route::get('noticias-editar/{id}','NoticiasController@edit')->name('admin.noticias.edit');
		Route::post('noticias-actualizar','NoticiasController@update')->name('admin.noticias.update');
		Route::get('noticias-eliminar/{id}','NoticiasController@delete')->name('admin.noticias.delete');
	});

});
