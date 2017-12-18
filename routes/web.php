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

Route::group(['middleware' => 'auth'], function(){
	require __DIR__.'/admin/casas/casas.route.php';
	require __DIR__.'/admin/locales/locales.route.php';
	require __DIR__.'/admin/departamentos/departamentos.route.php';
	require __DIR__.'/admin/oficinas/oficinas.route.php';
	require __DIR__.'/admin/playas/playas.route.php';
	require __DIR__.'/admin/proyectos/proyectos.route.php';
	require __DIR__.'/admin/terrenos/terrenos.route.php';
	require __DIR__.'/admin/categorias/categorias.route.php';
	require __DIR__.'/admin/propietarios/propietarios.route.php';
	require __DIR__.'/admin/ubigeo/ubigeo.route.php';
	require __DIR__.'/admin/banner/banner.route.php';
	require __DIR__.'/admin/social/social.route.php';
	require __DIR__.'/admin/mensajes_propiedades/mensajes_propiedades.route.php';
	require __DIR__.'/admin/mensajes_contactos/mensajes_contactos.route.php';
	require __DIR__.'/admin/negocios_propietarios/negocios_propietarios.route.php';
	require __DIR__.'/admin/suscripciones/suscripciones.route.php';
	require __DIR__.'/admin/usuarios/usuarios.route.php';
	require __DIR__.'/admin/noticias/noticias.route.php';
	require __DIR__.'/admin/contactos/contactos.route.php';

});

require __DIR__.'/page/page.route.php';


Route::group(['namespace' => 'Login'], function(){
	Route::post('iniciar-sesion','LoginController@authenticate')->name('auth.login');
	Route::get('cerrar-sesion', 'LoginController@logout')->name('auth.logout');
});

Route::group(['namespace' => 'Admin', 'middleware' => 'auth'], function(){
	Route::group(['namespace' => 'Home'], function(){
		Route::get('dashboard','HomeController@index')->name('admin.home.index');
	});	
});

Route::group(['namespace' => 'Admin', 'middleware' => 'auth'], function(){

	Route::group(['namespace' => 'Propiedades'], function(){
		Route::get('propietarios','PropietariosController@index')->name('admin.propietarios.index');
		Route::get('propietarios-data','PropietariosController@list')->name('admin.propietarios.list');
		Route::get('propietarios-crear','PropietariosController@create')->name('admin.propietarios.create');
		Route::post('propietarios-registrar','PropietariosController@store')->name('admin.propietarios.store');
		Route::get('propietarios-editar/{id}','PropietariosController@edit')->name('admin.propietarios.edit');
		Route::post('propietarios-actualizar','PropietariosController@update')->name('admin.propietarios.update');
		Route::get('propietarios-eliminar/{id}','PropietariosController@delete')->name('admin.propietarios.delete');
	});	
});

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');