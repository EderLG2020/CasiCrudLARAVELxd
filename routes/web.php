<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

Route::controller(HomeController::class)->group(function () {
    Route::get('/principalRuta', 'principal');
    Route::get('/contactoRuta', 'contacto')->name('welcomewel');
    Route::get('/BaseRuta', 'base');
    Route::get('/conocenosRuta/{Nombre}/{nick}', 'conocenos');
    Route::post('/rutaCrear', 'store')->name('crear.practicante');
    Route::get('/rutaCrear', 'miForm')->name('form.practicante');
});



Route::controller(CursoController::class)->group(function () {
    Route::get('/', [CursoController::class, 'index']);
    Route::get('/cursos/{cur}/{categoria?}', 'show');

    Route::post('/cursos/create', 'create');
});
// Route::get('/cursos', function () {
//     return "Hola xd";
// });

// Route::get('/rutaxd/{nombre}', function ($nombre) {
//     return "Hola: $nombre";
// });

// Route::get('/cursos/{cur}/{categoria?}', [CursoController::class, 'show']);

// Route::post('/cursos/create',  [CursoController::class, 'create']);

Route::get('/cursos', function () {
    return "Hola xd";
});

// Route::get('migrate', function () {
//     \Illuminate\Support\Facades\Artisan::call('migrate:fresh -—seed');
// });
