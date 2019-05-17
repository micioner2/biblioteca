<?php

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('admin/sistema/permiso/{nombre?}','PermisoController@index')->name('permiso');
// Route::view('permiso','permiso');


Route::get('permiso/{nombre}', function ($nombre) {
 return $nombre;
})->where('nombre', '[A-Za-z]+')->name('permiso');