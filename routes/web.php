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
});