<?php

Route::group(['namespace' => 'Admin'], function(){

	Route::group(['namespace' => 'MensajesContactos'], function(){
		Route::get('mensajes-contactos','MensajesContactosController@index')->name('admin.mensajes-contactos.index');
		Route::get('mensajes-contactos-data','MensajesContactosController@list')->name('admin.mensajes-contactos.list');
		Route::get('mensajes-contactos-eliminar/{id}','MensajesContactosController@delete')->name('admin.mensajes-contactos.delete');
	});

});
