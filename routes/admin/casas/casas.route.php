<?php

Route::group(['namespace' => 'Admin'], function(){

	Route::group(['namespace' => 'Propiedades'], function(){
		Route::get('casas','CasasController@index')->name('admin.casas.index');
		Route::get('casas-data','CasasController@list')->name('admin.casas.list');
		Route::get('casas-crear','CasasController@create')->name('admin.casas.create');
		Route::post('casas-registrar','CasasController@store')->name('admin.casas.store');
		Route::get('casas-editar/{id}','CasasController@edit')->name('admin.casas.edit');
		Route::post('casas-actualizar','CasasController@update')->name('admin.casas.update');
		Route::get('casas-eliminar/{id}','CasasController@delete')->name('admin.casas.delete');
	});

});
