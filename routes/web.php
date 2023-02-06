<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\SemestreController;
use Illuminate\Support\Facades\Route;

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
    return view('classe');
})->name('classe');

Route::resource('etudiants',EtudiantController::class);
Route::resource('matieres',MatiereController::class);
Route::resource('semestres',SemestreController::class);
//Route::get('classe',[EtudiantController::class,'liste'])->name('classe');
