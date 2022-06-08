<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EtudiantController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [LoginController::class, 'index']);
Route::post('/logon', [LoginController::class, 'logon']);
Route::post('/welcome', [LoginController::class, 'welcome']);
Route::get('/etudiant/add', [EtudiantController::class, 'add']);
Route::post('/etudiant/save', [EtudiantController::class, 'save']);
Route::post('/etudiant/update', [EtudiantController::class, 'update']);
Route::get('/etudiant/delete/{id}', [EtudiantController::class, 'delete']);
Route::get('/etudiant/getAll', [EtudiantController::class, 'getAll']);
