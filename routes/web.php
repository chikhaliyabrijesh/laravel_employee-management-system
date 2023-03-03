<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;


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

Route::get("/", function () {
    return view("content");
});

Route::get("/addemployee",[EmployeesController::class,"index"]);
Route::post("/addemployee",[EmployeesController::class,"store"]);
Route::get("/viewemployee",[EmployeesController::class,"show"]);
Route::get("/viewemployee/{id}",[EmployeesController::class,"destroy"]);
Route::get("/editemployee/{id}",[EmployeesController::class,"edit"]);
Route::post("/editemployee/{id}",[EmployeesController::class,"update"]);