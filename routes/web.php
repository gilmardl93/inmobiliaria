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

require __DIR__.'/admin/casas/casas.route.php';
require __DIR__.'/admin/locales/locales.route.php';
require __DIR__.'/admin/departamentos/departamentos.route.php';
require __DIR__.'/admin/oficinas/oficinas.route.php';
require __DIR__.'/admin/playas/playas.route.php';
require __DIR__.'/admin/terrenos/terrenos.route.php';
require __DIR__.'/admin/categorias/categorias.route.php';
require __DIR__.'/admin/ubigeo/ubigeo.route.php';
require __DIR__.'/admin/suscripciones/suscripciones.route.php';
require __DIR__.'/admin/usuarios/usuarios.route.php';

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

	
});

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');