<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaisController;
use App\Http\controllers\AutorController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/**
	* @OA\Get(
    *     path="/api/ejecutar",
    *     summary="informacion breve del endpoint desde el route",
    *     @OA\Response(response="200", description="List of users"),
    * )
    */

    Route::get('/ejecutar', ['RespuestaController::class,index']);
    
route ::post("/nuevo",[PaisController::class,"crearPais"]);
Route::get('/autores',[Autorcontroller::Class, 'obtenerAutores']);


route::get("/obtener",[PaisController::class,"obtener"]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();


});
