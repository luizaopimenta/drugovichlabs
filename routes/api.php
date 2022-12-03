<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ManagerController;
Route::get("managers", [ManagerController::class, "index"]);
Route::get("manager/{id}", [ManagerController::class, "show"]);
Route::put("manager/update/{id}", [ManagerController::class, "update"]);
Route::delete("manager/delete/{id}", [ManagerController::class, "destroy"]);
Route::post("manager/register", [ManagerController::class, "store"]);
Route::post("manager/login", [ManagerController::class, "login"]);
Route::post("manager/logout", [ManagerController::class, "logout"])->middleware(["auth:sanctum", "ability:check,edit"]);
Route::get("groups", [GroupController::class, "index"])->middleware(["auth:sanctum", "ability:check,edit"]);
Route::post("group/insert", [GroupController::class, "store"])->middleware(["auth:sanctum", "ability:edit"]);
Route::get("group/{id}", [GroupController::class, "show"])->middleware(["auth:sanctum", "ability:check,edit"]);
Route::put("group/update/{id}", [GroupController::class, "update"])->middleware(["auth:sanctum", "ability:edit"]);
Route::delete("group/delete/{id}", [GroupController::class, "destroy"])->middleware(["auth:sanctum", "ability:check,edit"]);
Route::get("client/{id}", [ClientController::class, "show"])->middleware(["auth:sanctum", "ability:edit"]);
Route::get("clients/", [ClientController::class, "index"])->middleware(["auth:sanctum", "ability:edit"]);
Route::get("client/group/{idGroup}", [ClientController::class, "showGroup"])->middleware(["auth:sanctum", "ability:edit"]);
Route::put("client/update/{id}", [ClientController::class, "update"])->middleware(["auth:sanctum", "ability:edit"]);
Route::post("client/insert", [ClientController::class, "store"])->middleware(["auth:sanctum", "ability:check,edit"]);
Route::delete("client/delete/{id}", [ClientController::class, "destroy"])->middleware(["auth:sanctum", "ability:check,edit"]);
