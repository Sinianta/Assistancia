<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\superController;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\DemandesController;
use  App\Http\Controllers\AdminController;
use  App\Http\Controllers\StatusController;
use  App\Http\Controllers\admin2Controller;



Route::get('/', function () {
    return view('auth/login');
});

Route::get('/home1', function () {
    return view('home1');
});
Route::get('/page', function () {
    return view('home');
});

Route::get('/connecté', function () {
    return view('login/index1');
});

Route::get('/ins', function () {
    return view('auth/register');
});

Route::get('/ajoutAdmin', function () {
    return view('super-user/ajoutAdmin');
});
Route::get('/superUser', function () {
    return view('super-user/superUser');
});

Route::get('/listAdmin', function () {
    return view('super-user/listAdmin');
});

Route::get('/faireDemande', function () {
    return view('clients/faireDemande');
});



Route::resource('connexion', UserController::class);

Route::resource('demande', DemandesController::class);

Route::resource('admin', AdminController::class);

Route::resource('status', StatusController::class);

Route::resource('acheve', admin2Controller::class);
Route::resource('super', superController::class);




Route::get('/index-traitre', function () {
    return view('administrateurs/index-traite');
});

Route::get('/traiter', function () {

    return view('administrateurs/traiteDemande');



});

Route::get('/accueil', function () {
     return view('super-user/accueil');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
