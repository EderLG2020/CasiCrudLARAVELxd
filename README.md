D:\proyecto\laravel1\routes\web.php -----------------------------> Se cargan las rutas (1)
D:\proyecto\laravel1\app\Http\Controllers\CursoController.php ---> Controlador (2)
D:\proyecto\laravel1\config\database.php ------------------------> Configuracion de la base de datos
D:\proyecto\laravel1\database\migrations ------------------------> Estas tablas se crearan en la base de datos (3)(4)

Arranque:

1. php artisan serve ---------------------------------------> Corre el codigo en el puerto 8000.
2. php artisan make:controller MyXDController --------------> Crea un controlador 'MyXDController'
3. php artisan migrate -------------------------------------> Crea las tablas de la carpeta migrations
4. php artisan make:migration create_cursos_table ----------> Crea un archivo migracion "cursos"
5. php artisan migrate:rollback ----------------------------> Ejecuta down() y esta elimina la tabla
6. php artisan migrate:fresh -------------------------------> Elimina todo y lo actualiza, borra los datos
7. php artisan make:migration add_avatar_to_users_table ----> Actualiza la tabla añade 'avatar' en users sin borrar los datos recordad que los campos nueos deben ser de ->nullable() para que no de error
8. composer require doctrine /dbal -------------------------> Este paquete nos ayuda cambiar los requisitos de la columna '->change()'

NOTAS:

Route::get('/cursos/{cur}/{categoria?}', [CursoController::class, 'show']); --> llama el controlador en la version 8 era -> ,CursoController@index

Route::controller(CursoController::class)->group(function () { ... } --> Grupo de rutas
