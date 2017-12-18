<?php

Route::group(['namespace' => 'Admin'], function(){

	Route::group(['namespace' => 'Banner'], function(){
		Route::get('banner','BannerController@index')->name('admin.banner.index');
		Route::get('banner-data','BannerController@list')->name('admin.banner.list');
		Route::get('banner-crear','BannerController@create')->name('admin.banner.create');
		Route::post('banner-registrar','BannerController@store')->name('admin.banner.store');
		Route::get('banner-editar/{id}','BannerController@edit')->name('admin.banner.edit');
		Route::post('banner-actualizar','BannerController@update')->name('admin.banner.update');
		Route::get('banner-eliminar/{id}','BannerController@delete')->name('admin.banner.delete');
	});

});
