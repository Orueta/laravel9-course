<?php

use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\UserController;

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

// !Llamado de controladores en laravel 7
// Route::get('/', 'HomeController');
// Route::get('cursos', 'CursoController@index');

Route::get('/', HomeController::class)->name('home');

// Route::get('cursos', [CursoController::class, 'index']);
// Route::get('cursos/create', [CursoController::class, 'create']);
// Dejar las rutas que soliciten variables hasta el final
// Route::get('cursos/{curso}', [CursoController::class, 'show']);

// Grupo de rutoas
// Route::controller(CursoController::class)->group(function () {
//     Route::get('cursos', 'index')->name('cursos.index');
//     Route::get('cursos/create', 'create')->name('cursos.create');
//     Route::post('cursos', 'store')->name('cursos.store');
//     Route::get('cursos/{curso}', 'show')->name('cursos.show');
//     Route::get('cursos/{curso}/edit', 'edit')->name('cursos.edit');
//     Route::put('cursos/{curso}', 'update')->name('cursos.update');
//     Route::delete('cursos/{curso}', 'destroy')->name('cursos.destroy');
// });

// Pasar mas de una variable en la url
// ? al final de la variable para decir que es opcional
// Route::get('cursos/{curso}/{categoria?}', function($curso, $categoria = null) {

//     if($categoria) {
//         return "Bienvenido al curso $curso, de la categoria $categoria";
//     } else {
//         return "Bienvenido al curso $curso";
//     }

// });

// Rutas de resource
// Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas' => 'curso'])->names('cursos');
Route::resource('cursos', CursoController::class);

Route::controller(UserController::class)->group(function () {
    Route::get('users', 'index')->name('users.index');
    Route::get('users/pdf', 'generatePDF')->name('users.pdf');
});

Route::view('nosotros', 'nosotros')->name('nosotros');

// Ruta de correo electronico
Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');

Route::get('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');

