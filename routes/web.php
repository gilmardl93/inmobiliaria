<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['namespace' => 'Page'], function(){
	Route::group(['namespace' => 'Home'], function(){
		Route::get('/','HomeController@index')->name('page.home.index');
		Route::get('noticias','HomeController@noticias')->name('page.home.noticias');
		Route::get('contactos','HomeController@contactos')->name('page.home.contactos');
		Route::get('login','HomeController@login')->name('page.home.login');
		Route::get('propietarios','HomeController@propietarios')->name('page.home.propietarios');
	});

	Route::group(['namespace' => 'Casas'], function(){
		Route::get('casas-compras','CasasController@compras')->name('page.casas.compras');
		Route::get('casas-ventas','CasasController@ventas')->name('page.casas.ventas');
	});

	Route::group(['namespace' => 'Departamentos'], function(){
		Route::get('departamentos-compras','DepartamentosController@compras')->name('page.departamentos.compras');
		Route::get('departamentos-ventas','DepartamentosController@ventas')->name('page.departamentos.ventas');
	});

	Route::group(['namespace' => 'Locales'], function(){
		Route::get('locales-compras','LocalesController@compras')->name('page.locales.compras');
		Route::get('locales-ventas','LocalesController@ventas')->name('page.locales.ventas');
	});

	Route::group(['namespace' => 'Oficinas'], function(){
		Route::get('oficinas-compras','OficinasController@compras')->name('page.oficinas.compras');
		Route::get('oficinas-ventas','OficinasController@ventas')->name('page.oficinas.ventas');
	});

	Route::group(['namespace' => 'Playas'], function(){
		Route::get('playas-compras','PlayasController@compras')->name('page.playas.compras');
		Route::get('playas-ventas','PlayasController@ventas')->name('page.playas.ventas');
	});

	Route::group(['namespace' => 'Propietarios'], function(){
		Route::get('propietarios-compras','PropietariosController@compras')->name('page.propietarios.compras');
		Route::get('propietarios-ventas','PropietariosController@ventas')->name('page.propietarios.ventas');
	});

	Route::group(['namespace' => 'Proyectos'], function(){
		Route::get('proyectos-compras','ProyectosController@compras')->name('page.proyectos.compras');
		Route::get('proyectos-ventas','ProyectosController@ventas')->name('page.proyectos.ventas');
	});

	Route::group(['namespace' => 'Terrenos'], function(){
		Route::get('terrenos-compras','TerrenosController@compras')->name('page.terrenos.compras');
		Route::get('terrenos-ventas','TerrenosController@ventas')->name('page.terrenos.ventas');
	});

	Route::group(['namespace' => 'Suscripcion'], function(){
		Route::post('suscripcion-registrar','SuscripcionController@store')->name('page.suscripcion.store');
	});

});

Route::group(['namespace' => 'Login'], function(){
	Route::post('iniciar-sesion','LoginController@authenticate')->name('auth.login');
});

Route::group(['namespace' => 'Admin'], function(){
	Route::group(['namespace' => 'Home'], function(){
		Route::get('dashboard','HomeController@index')->name('admin.home.index');
	});

	Route::group(['namespace' => 'Users'], function(){
		Route::get('usuarios','UserController@index')->name('admin.users.index');
		Route::get('usuarios-data','UserController@list')->name('admin.users.list');
		Route::get('usuario-crear','UserController@create')->name('admin.users.create');
		Route::post('usuario-registrar','UserController@store')->name('admin.users.store');
		Route::get('usuario-editar/{id}','UserController@edit')->name('admin.users.edit');
		Route::post('usuario-actualizar','UserController@update')->name('admin.users.update');
		Route::get('usuario-eliminar/{id}','UserController@delete')->name('admin.users.delete');
	});

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

	Route::group(['namespace' => 'Categoria'], function(){
		Route::get('categoria','CategoriaController@index')->name('admin.categoria.index');
		Route::get('categoria-data','CategoriaController@list')->name('admin.categoria.list');
		Route::get('categoria-crear','CategoriaController@create')->name('admin.categoria.create');
		Route::post('categoria-registrar','CategoriaController@store')->name('admin.categoria.store');
		Route::get('categoria-editar/{id}','CategoriaController@edit')->name('admin.categoria.edit');
		Route::post('categoria-actualizar','CategoriaController@update')->name('admin.categoria.update');
		Route::get('categoria-eliminar/{id}','CategoriaController@delete')->name('admin.categoria.delete');
	});

	Route::group(['namespace' => 'Propiedades'], function(){
		Route::get('casas','CasasController@index')->name('admin.casas.index');
		Route::get('casas-data','CasasController@list')->name('admin.casas.list');
		Route::get('casas-crear','CasasController@create')->name('admin.casas.create');
		Route::post('casas-registrar','CasasController@store')->name('admin.casas.store');
		Route::get('casas-editar/{id}','CasasController@edit')->name('admin.casas.edit');
		Route::post('casas-actualizar','CasasController@update')->name('admin.casas.update');
		Route::get('casas-eliminar/{id}','CasasController@delete')->name('admin.casas.delete');
	});

	Route::group(['namespace' => 'Propiedades'], function(){
		Route::get('departamentos','DepartamentosController@index')->name('admin.departamentos.index');
		Route::get('departamentos-data','DepartamentosController@list')->name('admin.departamentos.list');
		Route::get('departamentos-crear','DepartamentosController@create')->name('admin.departamentos.create');
		Route::post('departamentos-registrar','DepartamentosController@store')->name('admin.departamentos.store');
		Route::get('departamentos-editar/{id}','DepartamentosController@edit')->name('admin.departamentos.edit');
		Route::post('departamentos-actualizar','DepartamentosController@update')->name('admin.departamentos.update');
		Route::get('departamentos-eliminar/{id}','DepartamentosController@delete')->name('admin.departamentos.delete');
	});

	Route::group(['namespace' => 'Propiedades'], function(){
		Route::get('locales','LocalesController@index')->name('admin.locales.index');
		Route::get('locales-data','LocalesController@list')->name('admin.locales.list');
		Route::get('locales-crear','LocalesController@create')->name('admin.locales.create');
		Route::post('locales-registrar','LocalesController@store')->name('admin.locales.store');
		Route::get('locales-editar/{id}','LocalesController@edit')->name('admin.locales.edit');
		Route::post('locales-actualizar','LocalesController@update')->name('admin.locales.update');
		Route::get('locales-eliminar/{id}','LocalesController@delete')->name('admin.locales.delete');
	});

	Route::group(['namespace' => 'Propiedades'], function(){
		Route::get('terrenos','TerrenosController@index')->name('admin.terrenos.index');
		Route::get('terrenos-data','TerrenosController@list')->name('admin.terrenos.list');
		Route::get('terrenos-crear','TerrenosController@create')->name('admin.terrenos.create');
		Route::post('terrenos-registrar','TerrenosController@store')->name('admin.terrenos.store');
		Route::get('terrenos-editar/{id}','TerrenosController@edit')->name('admin.terrenos.edit');
		Route::post('terrenos-actualizar','TerrenosController@update')->name('admin.terrenos.update');
		Route::get('terrenos-eliminar/{id}','TerrenosController@delete')->name('admin.terrenos.delete');
	});

	Route::group(['namespace' => 'Propiedades'], function(){
		Route::get('playas','PlayasController@index')->name('admin.playas.index');
		Route::get('playas-data','PlayasController@list')->name('admin.playas.list');
		Route::get('playas-crear','PlayasController@create')->name('admin.playas.create');
		Route::post('playas-registrar','PlayasController@store')->name('admin.playas.store');
		Route::get('playas-editar/{id}','PlayasController@edit')->name('admin.playas.edit');
		Route::post('playas-actualizar','PlayasController@update')->name('admin.playas.update');
		Route::get('playas-eliminar/{id}','PlayasController@delete')->name('admin.playas.delete');
	});

	Route::group(['namespace' => 'Propiedades'], function(){
		Route::get('oficinas','OficinasController@index')->name('admin.oficinas.index');
		Route::get('oficinas-data','OficinasController@list')->name('admin.oficinas.list');
		Route::get('oficinas-crear','OficinasController@create')->name('admin.oficinas.create');
		Route::post('oficinas-registrar','OficinasController@store')->name('admin.oficinas.store');
		Route::get('oficinas-editar/{id}','OficinasController@edit')->name('admin.oficinas.edit');
		Route::post('oficinas-actualizar','OficinasController@update')->name('admin.oficinas.update');
		Route::get('oficinas-eliminar/{id}','OficinasController@delete')->name('admin.oficinas.delete');
	});

	Route::group(['namespace' => 'Suscripcion'], function(){
		Route::get('suscripcion','SuscripcionController@index')->name('admin.suscripcion.index');
		Route::get('suscripcion-data','SuscripcionController@list')->name('admin.suscripcion.list');
		Route::get('suscripcion-eliminar/{id}','SuscripcionController@delete')->name('admin.suscripcion.delete');
	});
});

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');