<?php

Route::group(['namespace' => 'Admin'], function(){

	Route::group(['namespace' => 'Users'], function(){
		Route::get('usuarios','UserController@index')->name('admin.users.index');
		Route::get('usuarios-data','UserController@list')->name('admin.users.list');
		Route::get('usuario-crear','UserController@create')->name('admin.users.create');
		Route::post('usuario-registrar','UserController@store')->name('admin.users.store');
		Route::get('usuario-editar/{id}','UserController@edit')->name('admin.users.edit');
		Route::post('usuario-actualizar','UserController@update')->name('admin.users.update');
		Route::get('usuario-eliminar/{id}','UserController@delete')->name('admin.users.delete');
	});

});
