<?php

use App\Http\Controllers\EvenementController;
use App\Http\Controllers\ParticipantController;
use App\Models\Organisateur;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gestion/organisateur', function () {
    $organisateur = new Organisateur();
    //return view('');
});

Route::resource(
    "evenements", EvenementController::class
);
Route::resource(
    "participants", ParticipantController::class
);


Route::prefix("organisateur/")->name("organisateur.")->group(function () {
    Route::get("",[OrganisateurController::class,"index"])->name("organisateur.index");
    Route::get("create",[OrganisateurController::class,"create"])->name("organisateur.create");
    Route::post("",[OrganisateurController::class,"store"])->name("organisateur.store");
    Route::get("{organisateurs}",[OrganisateurController::class,"edit"])->name("organisateur.edit");
    Route::put('{organisateur}',[OrganisateurController::class,"update"])->name("organisateur.update");
    Route::delete('{organisateurs}',[OrganisateurController::class, 'destroy'])->name('organisateur.destroy');
});

Route::prefix("users/")->name("users")->group(function(){
    Route::get('',[UseController::class, 'index'])->name('user.index');
    Route::get('create',[UseController::class, 'create'])->name('user.create');
    Route::post('',[UseController::class, 'store'])->name('user.store');
    Route::get('{users}',[UseController::class, 'edit'])->name('user.edit');
    Route::put('{users}',[UseController::class, 'update'])->name('user.update');
    Route::delete('{users}',[UseController::class, 'destroy'])->name('user.destroy');
});

Route::prefix("participants/")->name("participants.")->group(function(){
    Route::get('',[ParticipantController::class, 'index'])->name('index');
    Route::get('create',[ParticipantController::class, 'create'])->name('create');
    Route::post('',[ParticipantController::class, 'store'])->name('store');
    Route::get('{participant}',[ParticipantController::class, 'edit'])->name('edit');
    Route::put('{participants}',[ParticipantController::class, 'update'])->name('update');
    Route::delete('{participants}',[ParticipantController::class, 'destroy'])->name('destroy');
});


Route::prefix("evenements/")->name("evenements.")->group(function(){
    Route::get('',[EvenementController::class, 'index'])->name('evenements.index');
    Route::get('create',[EvenementController::class, 'create'])->name('evenements.create');
    Route::post('',[EvenementController::class, 'store'])->name('evenements.store');
    Route::get('{evenements}',[EvenementController::class, 'edit'])->name('evenements.edit');
    Route::put('{evenements}',[EvenementController::class, 'update'])->name('evenements.update');
    Route::delete('{evenements}',[EvenementController::class, 'destroy'])->name('evenements.destroy');
});


Route::prefix("participant_evenements/")->name("participant_evenements.")->group(function(){
    Route::get('',[EvenementController::class, 'index'])->name('participant_evenements.index');
    Route::get('create',[EvenementController::class, 'create'])->name('participant_evenements.create');
    Route::post('',[EvenementController::class, 'store'])->name('participant_evenements.store');
    Route::get('{participant_evenements}',[EvenementController::class, 'edit'])->name('participant_evenements.edit');
    Route::put('{participant_evenements}',[EvenementController::class, 'update'])->name('participant_evenements.update');
    Route::delete('{participant_evenements}',[EvenementController::class, 'destroy'])->name('participant_evenements.destroy');
});
