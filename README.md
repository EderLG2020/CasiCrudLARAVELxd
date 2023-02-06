D:\proyecto\laravel1\routes\web.php -> Se cargan las rutas (1)
D:\proyecto\laravel1\app\Http\Controllers\CursoController.php -> Controlador (2)

Arranque:

1. php artisan serve -> corre el codigo en el puerto 8000.
2. php artisan make:controller MyXDController

Route::get('/cursos/{cur}/{categoria?}', [CursoController::class, 'show']); --> llama el controlador
