<?php

Route::group(['namespace' => 'Admin'], function(){

	Route::group(['namespace' => 'Ubigeo'], function(){
		Route::get('ubigeo','UbigeoController@index')->name('admin.ubigeo.index');
		Route::get('ubigeo-data','UbigeoController@list')->name('admin.ubigeo.list');
		Route::get('ubigeo-crear','UbigeoController@create')->name('admin.ubigeo.create');
		Route::post('ubigeo-registrar','UbigeoController@store')->name('admin.ubigeo.store');
		Route::get('ubigeo-editar/{id}','UbigeoController@edit')->name('admin.ubigeo.edit');
		Route::post('ubigeo-actualizar','UbigeoController@update')->name('admin.ubigeo.update');
		Route::get('ubigeo-eliminar/{id}','UbigeoController@delete')->name('admin.ubigeo.delete');
		Route::get('ubigeo-json','UbigeoController@ubigeo')->name('admin.ubigeo.json');
	});

});
