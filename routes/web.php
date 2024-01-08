<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
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

Route::get('/', [EmployeeController::class, 'index'])->name('index');
Route::post('/save-employee', [EmployeeController::class, 'saveEmployee'])->name('save');
Route::get('/delete-employee/{id}', [EmployeeController::class, 'deleteEmployee'])->name('removeEmployee');
Route::get('/update-employee/{id}', [EmployeeController::class, 'updateEmployee'])->name('updateEmployee');
Route::post('/save-updated-employee', [EmployeeController::class, 'saveUpdatedEmployee'])->name('saveUpdatedEmployee');