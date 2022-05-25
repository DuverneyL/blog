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
//Cuando un usuario ingresa al sitio ppal lo que quiere que se vaya a la vista welcome
Route::get('/', function () {
    //return view('welcome');
    return "Bienvenido a la página ppal";
});

Route::get('cursos', function (){
    return "Bienvenido a la página cursos";
});

Route::get('cursos/create', function (){
    return "En esta pagina podras crear un curso";
});

/*Route::get('cursos/{curso}', function ($curso){
    return "Bienvenido al curso $curso";
});*/

Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null){
    if ($categoria){
        return "Bienvenido al curso $curso de la categoria $categoria";
    }else{
        return "Bienvenido al curso $curso";
    }

});



