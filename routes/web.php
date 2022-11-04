<?php

/* Son necesarias para conocer y añadir las rutas */
use App\Http\Controllers\EmpleadoController;
use App\Models\Empleado;
use App\Http\Controllers\VentaController;
use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\SneakerController;



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
    //CUCEI
    return view('index');
    //return view('welcome');
});
 
Route::resource('empleado', EmpleadoController::class);
Route::resource('venta', VentaController::class)->parameters(['venta' => 'venta']);
Route::resource('sneaker', SneakerController::class);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
