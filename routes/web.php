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

//Route::get('/', function () {
//    return view('welcome');
//});

/*Route::get('/', function (){
	return 'Pantalla Principal';
	return view('home');
});*/
Route::get('/', 'HomeController@getHome');

/*Route::get('login', function (){
	//return 'Login Usuario';
	return view('auth.login');
});*/

Route::get('salir', function (){
	Auth::logout();
	return redirect('/home');
});

/*Route::get('catalog', function (){
	return 'Listado Peliculas';
	return view('catalog.index');
});*/
Auth::routes();

Route::get('/home', 'HomeController@getHome');



Route::group(['middleware' => 'auth'], function(){

	Route::get('catalog', 'CatalogController@getIndex');

	/*Route::get('catalog/show/{id}', function($id){
		return 'Vista detalle pelicula '.$id;
		return view('catalog.show', array('id'=>$id));
	});*/
	Route::get('catalog/show/{id}', 'CatalogController@getShow');

	/*Route::get('catalog/create', function(){
		return 'Añadir Pelicula';
		return view('catalog.create');
	});*/
	Route::get('catalog/create', 'CatalogController@getCreate');
	/*Route::get('catalog/edit/{id}', function($id){
		return 'Modificar Pelicula '.$id;
		return view('catalog.edit', array('id'=>$id));
	});*/
	Route::get('catalog/edit/{id}', 'CatalogController@getEdit');

});