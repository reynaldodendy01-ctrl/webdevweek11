<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaptopController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/listlaptop', [LaptopController::class, 'index'])->name('listlaptop');
Route::get('/createlaptop', [LaptopController::class, 'create']);
Route::post('/savelaptop', [LaptopController::class, 'store'])->name('savelaptop');
Route::delete('/deletelaptop/{laptop}', [LaptopController::class, 'destroy'])->name('deletelaptop');
Route::get('/editlaptop/{laptop}', [LaptopController::class, 'edit'])->name('editlaptop');
Route::put('/updatelaptop/{laptop}', [LaptopController::class, 'update'])->name('updatelaptop');