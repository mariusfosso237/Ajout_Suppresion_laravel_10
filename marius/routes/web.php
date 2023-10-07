<?php

use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/marius', function () {
    return view('liste');
});*/

Route::get('/etudiant', [EtudiantController::class,'liste_etudiant']);

Route::get('/ajouter', [EtudiantController::class,'ajouter_etudiant']);

Route::get('/ajouter/traitement', [EtudiantController::class,'ajouter_etudiant_traitement']);

Route::get('/update-etudiant/{id}', [EtudiantController::class,'update_etudiant']);

Route::get('/update/traitement', [EtudiantController::class,'update_etudiant_traitement']);

Route::get('/delete-etudiant/{id}', [EtudiantController::class,'delete_etudiant']);