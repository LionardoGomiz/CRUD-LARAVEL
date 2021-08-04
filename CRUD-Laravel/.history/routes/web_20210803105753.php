<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController; //IMPORTAR EL CONTROLADOR A USAR
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

Route::get('/', function () {
    return view('welcome');
});

//RUTA PARA ACCEDER A MIS VISTAS
/*Route::get('/empleado', function () {
    return view('empleado.index');
});*/

//RUTA PARA ACCEDER A LOS METODOS DE MI CONTROLADOR DE FORMA INDIVIDUAL
Route::get('/empleado/create', [EmpleadoController::class,'create']);

//RUTA PARA ACCEDER A TODOS LOS METODOS DE MI CONTROLADOR
Route::resource('empleado',EmpleadoController::class);
return view('empleado.index');
