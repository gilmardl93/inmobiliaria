<?php

Route::group(['namespace' => 'Page'], function(){
	Route::group(['namespace' => 'Home'], function(){
		Route::get('/','HomeController@index')->name('page.home.index');
		Route::get('noticias','HomeController@noticias')->name('page.home.noticias');
		Route::get('contactos','HomeController@contactos')->name('page.home.contactos');
		Route::get('login','HomeController@login')->name('page.home.login');
		Route::get('propietarios/contactos','HomeController@propietarios')->name('page.home.propietarios');
	});

	Route::group(['namespace' => 'Propiedades'], function(){
		Route::get('detalle/{slug}', 'PropiedadesController@detalle')->name('page.propiedades.detalle');
		Route::post('buscar', 'PropiedadesController@search')->name('page.propiedades.search');
	});

	Route::group(['namespace' => 'Casas'], function(){
		Route::get('casas-alquiler','CasasController@alquiler')->name('page.casas.alquiler');
		Route::get('casas-venta','CasasController@venta')->name('page.casas.venta');
	});

	Route::group(['namespace' => 'Departamentos'], function(){
		Route::get('departamentos-alquiler','DepartamentosController@alquiler')->name('page.departamentos.alquiler');
		Route::get('departamentos-venta','DepartamentosController@venta')->name('page.departamentos.venta');
	});

	Route::group(['namespace' => 'Locales'], function(){
		Route::get('locales-alquiler','LocalesController@alquiler')->name('page.locales.alquiler');
		Route::get('locales-venta','LocalesController@venta')->name('page.locales.venta');
	});

	Route::group(['namespace' => 'Oficinas'], function(){
		Route::get('oficinas-alquiler','OficinasController@alquiler')->name('page.oficinas.alquiler');
		Route::get('oficinas-venta','OficinasController@venta')->name('page.oficinas.venta');
	});

	Route::group(['namespace' => 'Playas'], function(){
		Route::get('playas-alquiler','PlayasController@alquiler')->name('page.playas.alquiler');
		Route::get('playas-venta','PlayasController@venta')->name('page.playas.venta');
	});

	Route::group(['namespace' => 'Propietarios'], function(){
		Route::get('propietarios-alquiler','PropietariosController@alquiler')->name('page.propietarios.alquiler');
		Route::get('propietarios-venta','PropietariosController@venta')->name('page.propietarios.venta');
		Route::post('registrar-RPOPIET', 'PropietariosController@negocios')->name('page.propietarios.negocios');
	});

	Route::group(['namespace' => 'Proyectos'], function(){
		Route::get('proyectos-alquiler','ProyectosController@alquiler')->name('page.proyectos.alquiler');
		Route::get('proyectos-venta','ProyectosController@venta')->name('page.proyectos.venta');
	});

	Route::group(['namespace' => 'Terrenos'], function(){
		Route::get('terrenos-alquiler','TerrenosController@alquiler')->name('page.terrenos.alquiler');
		Route::get('terrenos-venta','TerrenosController@venta')->name('page.terrenos.venta');
	});

	Route::group(['namespace' => 'Suscripcion'], function(){
		Route::post('suscripcion-registrar','SuscripcionController@store')->name('page.suscripcion.store');
	});

	Route::group(['namespace' => 'Noticias'], function(){
		Route::get('ver-noticia/{slug}','NoticiasController@slug')->name('page.noticias.slug');
	});

	Route::group(['namespace' => 'MensajeContactos'], function(){
		Route::post('registrar-mensaje', 'MensajeContactosController@store')->name('page.contactos.store');
	});

	Route::group(['namespace' => 'MensajePropiedades'], function(){
		Route::post('registrar-propiedad', 'MensajePropiedadesController@store')->name('page.propiedades.store');
	});

	Route::group(['namespace' => 'NegocioPropietarios'], function(){
		Route::post('registrar', 'NegocioPropietarioController@store')->name('page.negocios.store');
	});

	Route::group(['namespace' => 'Propiedades'], function(){
		Route::post('buscar-ubigeo', 'PropiedadesController@search2')->name('page.propiedades.search2');
		Route::post('buscar-precio', 'PropiedadesController@search3')->name('page.propiedades.search3');
	});

});