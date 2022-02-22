<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\TratamientosController;
use App\Http\Livewire\PagosController;
use App\Http\Livewire\EstadosController;
use App\Http\Livewire\MedicosController;
use App\Http\Livewire\UsersController;
use App\Http\Livewire\RolesController;
use App\Http\Livewire\PermisosController;
use App\Http\Livewire\AsignarController;
use App\Http\Livewire\CitasController;
use App\Http\Livewire\ClinicaController;
use App\Http\Livewire\PacientesController;
use App\Http\Livewire\CalendarController;

use App\Http\Livewire\ProvinciasController;
use App\Http\Livewire\CantonesController;
use App\Http\Livewire\EdificiosController;
use App\Http\Livewire\MarcasController;
use App\Http\Livewire\ModelosController;
use App\Http\Livewire\PcsController;
use App\Http\Livewire\TiposController;
use App\Http\Livewire\UnidadesController;

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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); // ESTADISTICAS
// Route::get('/calendario', CalendarController::class); //AGENDA
// Route::get('citas', CitasController::class);
// Route::get('/pacientes', PacientesController::class);
// Route::get('/tratamientos', TratamientosController::class);
// // AQUI VA PAGOS EXTRAS
// //AQUI VA REPORTES
// Route::get('/estados', EstadosController::class);
// Route::get('/pagos', PagosController::class); // TIPOS PAGOS
// Route::get('/medicos', MedicosController::class);
// Route::get('/usuarios', UsersController::class);
// Route::get('roles', RolesController::class);
// Route::get('permisos', PermisosController::class);
// Route::get('asignar', AsignarController::class);
// Route::get('clinica', ClinicaController::class);

Route::get('provincias', ProvinciasController::class);
Route::get('cantones', CantonesController::class);
Route::get('edificios', EdificiosController::class);
Route::get('unidades', UnidadesController::class);
Route::get('tipos', TiposController::class);
Route::get('marcas', MarcasController::class);
Route::get('modelos', ModelosController::class);

Route::get('pcs', PcsController::class);






