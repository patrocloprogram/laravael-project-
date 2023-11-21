<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\AdminController;
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
    return view('auth.login');
});

//Route::get('/estudiante', function () {
    //return view('estudiante.index');
//});

//Route::get('/estudiante/create',[EstudianteController::class,'create']);

Route::resource('estudiante', EstudianteController::class)->middleware('auth');
Auth::routes(['register'=>false,'reset'=>false]);

Route::get('/home', [EstudianteController::class, 'index'])->name('home');



Route::middleware(['auth'])->group(function () {
    Route::get('/', [EstudianteController::class, 'index'])->name('home');
});

Route::get('/formulario-asistencia', [AsistenciaController::class, 'mostrarFormulario'])->name('formulario-asistencia');
Route::post('/formulario-asistencia', [AsistenciaController::class, 'registrarAsistencia'])->name('formulario-asistencia');

Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');