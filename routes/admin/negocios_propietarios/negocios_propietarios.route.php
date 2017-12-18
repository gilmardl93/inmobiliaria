<?php

Route::group(['namespace' => 'Admin'], function(){

	Route::group(['namespace' => 'NegocioPropietarios'], function(){
		Route::get('negocio-propietarios','NegocioPropietariosController@index')->name('admin.negocio-propietarios.index');
		Route::get('negocio-propietarios-data','NegocioPropietariosController@list')->name('admin.negocio-propietarios.list');
		Route::get('negocio-propietarios-eliminar/{id}','NegocioPropietariosController@delete')->name('admin.negocio-propietarios.delete');
		Route::get('negocio-propietarios-descargar/{id}', 'NegocioPropietariosController@download')->name('admin.negocio-propietarios.download');
	});

});
