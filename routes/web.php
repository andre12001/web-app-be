<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalaryController;

Route::get('/', [SalaryController::class, 'index'])->name('salary.index');
Route::post('/salary/calculate', [SalaryController::class, 'calculate'])->name('salary.calculate');
