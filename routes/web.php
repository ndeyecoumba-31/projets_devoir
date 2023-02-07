<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});
Route::resource("/etudiants",EtudiantController::class);
// Route::get('/etudiants/create', [EtudiantController::class, 'create']);
// Route::get('/etudiants/index', [EtudiantController::class, 'etudiant']);
// Route::post('/store', [EtudiantController::class, 'store']);
