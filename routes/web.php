<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MaestrosController;
use Illuminate\Support\Facades\Route;

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
    return view('listado');
});

//Ruta para la vista de listado de clases
Route::get('/admin/clases', [AdminController::class,'index'])->name('admin.clases.index');
//Ruta para la vista de agregar clases
Route::get('/admin/clases/create', [AdminController::class,'create'])->name('admin.clases.create');

//Ruta para la vista de listado de maestros
Route::get('/admin/maestros', [AdminController::class,'visualizar'])->name('admin.maestros.index');
//Ruta para la vista de agregar maestros
Route::get('/admin/maestros/create', [AdminController::class,'crear'])->name('admin.maestros.create');


//Ruta para la vista de listado de alumnos
Route::get('/admin/alumnos', [AdminController::class,'visualizarAlumno'])->name('admin.alumnos.index');
//Ruta para la vista de agregar maestros
Route::get('/admin/alumnos/create', [AdminController::class,'crearAlumno'])->name('admin.alumnos.create');

//MAESTROS
//Ruta para la vista de listado de clases
Route::get('/maestros/clases', [MaestrosController::class,'ver_clases'])->name('maestros.clases.ver');
//Ruta para la vista de listado de horarios
Route::get('/maestros/horarios', [MaestrosController::class,'ver_horarios'])->name('maestros.horarios.ver');
//Ruta para la vista de listado de Asistencias
Route::get('/maestros/asistencias', [MaestrosController::class,'ver_asistencias'])->name('maestros.asistencias.ver');

Route::post('/request', [ArduinoController::class,'handleRequest']);
