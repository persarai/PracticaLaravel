<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EjemploController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    return "Hola, ¿cómo estás?";
});
Route::get('/usuarios',[EjemploController::class,'index']);

Route::get('/usuarios/create',[EjemploController::class,'create']);

Route::get('/usuarios/{IdUsuario}/{Nombre?}',[EjemploController::class,'otro']);

/*Route::get('/usuarios/create', function (){
    return "Hola esta es la página de crear usuarios";
});

Route::get('/usuarios/{IdUsuario}/{Nombre}', function ($idusuario, $nombre=null){
    if($nombre){
        return "Tu número de Id es: ".$idusuario." usuario".$nombre;
    }
    else{
        return "Tu id es ".$idusuario;
    }
});*/