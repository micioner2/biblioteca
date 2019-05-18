<?php

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('admin/sistema/permiso/{nombre?}','PermisoController@index')->name('permiso');
// Route::view('permiso','permiso');


Route::get('/','InicioController@index');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('permiso', 'PermisoController@index')->name('permiso');
    Route::get('permiso/crear', 'PermisoController@crear')->name('crear_permiso');
    Route::get('menu', 'MenuController@index')->name('crear_menu');
    Route::get('menu/crear', 'MenuController@crear')->name('crear_menu');
    Route::post('menu','MenuController@guardar')->name('guardar_menu');
});


