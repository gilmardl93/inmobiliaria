<?php

Route::group(['namespace' => 'Admin'], function(){

	Route::group(['namespace' => 'MensajesPropiedades'], function(){
		Route::get('mensajes-propiedades','MensajesPropiedadesController@index')->name('admin.mensajes-propiedades.index');
		Route::get('mensajes-propiedades-data','MensajesPropiedadesController@list')->name('admin.mensajes-propiedades.list');
		Route::get('mensajes-propiedades-eliminar/{id}','MensajesPropiedadesController@delete')->name('admin.mensajes-propiedades.delete');
	});

});
