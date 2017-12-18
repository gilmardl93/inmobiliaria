<?php

Route::group(['namespace' => 'Admin'], function(){

	Route::group(['namespace' => 'Social'], function(){
		Route::get('social-editar','SocialController@edit')->name('admin.social.edit');
		Route::post('social-actualizar','SocialController@update')->name('admin.social.update');
	});

});
