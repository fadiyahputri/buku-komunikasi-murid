<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PelanggaranController;

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
    return view('welcome');
});

Route::get("/dashboard", [DashboardController::class, "index"]);
Route::get("/datakasus/create", [DashboardController::class, "create"]);
Route::post("/datakasus/store", [DashboardController::class, "store"]);
Route::get("/datakasus/edit/{id}", [DashboardController::class, "edit"]);
Route::post("/datakasus/update/{id}", [DashboardController::class, "update"]);
Route::get("/datakasus/delete/{id}", [DashboardController::class, "destroy"]);


Route::get("/guru", [GuruController::class, "index"]);
Route::get("/guru/create", [GuruController::class, "create"]);
Route::post("/guru/store", [GuruController::class, "store"]);
Route::get("/guru/edit/{id}", [GuruController::class, "edit"]);
Route::post("/guru/update", [GuruController::class, "update"])->name('updateguru');
Route::get("/guru/delete/{id}", [GuruController::class, "destroy"]);

Route::get("/murid", [MuridController::class, "index"]);
Route::get("/murid/create", [MuridController::class, "create"]);
Route::post("/murid/store", [MuridController::class, "store"]);
Route::get("/murid/edit/{id}", [MuridController::class, "edit"]);
Route::post("/murid/update/{id}", [MuridController::class, "update"])->name('updatemurid');
Route::get("/kelas/delete/{id}", [MuridController::class, "destroy"]);

Route::get("/kelas", [KelasController::class, "index"]);
Route::get("/kelas/create", [KelasController::class, "create"]);
Route::post("/kelas/store", [KelasController::class, "store"]);
Route::get("/kelas/edit/{id}", [KelasController::class, "edit"]);
Route::post("/kelas/update", [KelasController::class, "update"])->name('updatekelas');
Route::get("/kelas/delete/{id}", [KelasController::class, "destroy"]);

Route::get("/pelanggaran", [PelanggaranController::class, "index"]);
Route::get("/pelanggaran/create", [PelanggaranController::class, "create"]);
Route::post("/pelanggaran/store", [PelanggaranController::class, "store"]);
Route::get("/pelanggaran/edit/{id}", [PelanggaranController::class, "edit"]);
Route::post("/pelanggaran/update", [PelanggaranController::class, "update"])->name('updatepelanggaran');
Route::get("/pelanggaran/delete/{id}", [PelanggaranController::class, "destroy"]);
