<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimoController;

Route::get('/', [PrimoController::class, "homepage"])->name("homepage");

Route::get('/artisti1', [PrimoController::class, "artisti"])->name("paginaartisti");


Route::get('/artisti1/dettaglio/{id}', [PrimoController::class, "dettaglioArtisti"])->name("paginadettaglioartisti");
