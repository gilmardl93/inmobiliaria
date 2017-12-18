<?php

Route::group(['namespace' => 'Admin'], function(){

	Route::group(['namespace' => 'Contactos'], function(){
		Route::get('contactos-editar','ContactosController@edit')->name('admin.contactos.edit');
		Route::post('contactos-actualizar','ContactosController@update')->name('admin.contactos.update');
	});

});
