<?php 

use App\Controller\ClaseController;
use App\Controller\HomeController;
use App\Controller\PersonalController;
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::get("/", [HomeController::class,'index']);
SimpleRouter::get("asistencia", [HomeController::class,'asistencia']);
SimpleRouter::get("reporte", [HomeController::class,'reporte']);
SimpleRouter::get("clases", [HomeController::class,'clases']);
SimpleRouter::post("clases/registro", [ClaseController::class,'store']);
SimpleRouter::get("perfiles", [HomeController::class,'perfiles']);
SimpleRouter::get('registro',[PersonalController::class,'index']);
SimpleRouter::get("/{id}", [PersonalController::class,'edit']);
SimpleRouter::post('registro/store',[PersonalController::class,'store']);
SimpleRouter::post('registro/update{id}',[PersonalController::class,'update']);
SimpleRouter::post('registro/destroy{id}',[PersonalController::class,'destroy']);
SimpleRouter::start();