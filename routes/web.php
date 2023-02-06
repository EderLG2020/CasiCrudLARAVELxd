<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
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

Route::controller(CursoController::class)->group(function () {
    Route::get('/', [CursoController::class, 'index']);
    Route::get('/cursos/{cur}/{categoria?}', 'show');

    Route::post('/cursos/create', 'create');
});
// Route::get('/cursos', function () {
//     return "Hola xd";
// });

// Route::get('/cursos/{cursito}', function($cursitoxd){
//     return "Hola: $cursitoxd";
// });

// Route::get('/cursos/{cur}/{categoria?}', [CursoController::class, 'show']);

// Route::post('/cursos/create',  [CursoController::class, 'create']);

Route::get('/cursos', function () {
    return "Hola xd";
});
