<?php

Route::group(['namespace' => 'Admin'], function(){

	Route::group(['namespace' => 'Categoria'], function(){
		Route::get('categoria','CategoriaController@index')->name('admin.categoria.index');
		Route::get('categoria-data','CategoriaController@list')->name('admin.categoria.list');
		Route::get('categoria-crear','CategoriaController@create')->name('admin.categoria.create');
		Route::post('categoria-registrar','CategoriaController@store')->name('admin.categoria.store');
		Route::get('categoria-editar/{id}','CategoriaController@edit')->name('admin.categoria.edit');
		Route::post('categoria-actualizar','CategoriaController@update')->name('admin.categoria.update');
		Route::get('categoria-eliminar/{id}','CategoriaController@delete')->name('admin.categoria.delete');
	});

});
