<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\StudentsController;
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

Route::get('/',[PagesController::class, 'index']);

Route::get('/edit',[PagesController::class, 'edit']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

Route::get('/students/create', [StudentsController::class, 'create']);

Route::get('/students', [StudentsController::class, 'index']);

Route::post('/students', [StudentsController::class, 'store']);

Route::delete('/delete/{id}', [StudentsController::class, 'delete']);


Route::get('/edit/{id}', [StudentsController::class, 'edit']);
Route::put('/edit/{id}', [StudentsController::class, 'update']);

/*Route::get('/students/operations', [StudentsController::class, 'operations']);
Route::get('/students/min', [StudentsController::class, 'min']);
Route::get('/students/max', [StudentsController::class, 'max']);*/