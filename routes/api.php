<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\ProduitController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/produits', ProduitController::class);

Route::apiResource('/clients', ClientController::class);

Route::group(['prefix'=>'produits'], function() {
    Route::apiResource('/{produit}/commande', CommandeController::class);
});
