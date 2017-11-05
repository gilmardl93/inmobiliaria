<?php

Route::group(['namespace' => 'Admin'], function(){

	Route::group(['namespace' => 'Suscripcion'], function(){
		Route::get('suscripcion','SuscripcionController@index')->name('admin.suscripcion.index');
		Route::get('suscripcion-data','SuscripcionController@list')->name('admin.suscripcion.list');
		Route::get('suscripcion-eliminar/{id}','SuscripcionController@delete')->name('admin.suscripcion.delete');
	});

});
