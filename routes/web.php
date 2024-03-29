<?php

use App\Http\Controllers\BankAccountController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PayRollController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaxController;
use App\Http\Controllers\TrainingProgramController;
use App\Http\Controllers\UserController;
use App\Models\Department;
use App\Models\TrainingProgram;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';
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
Auth::routes();

Route::middleware(['auth'])->group(function(){
// Route::get('/', function () {
//     return view('layouts.layout');
// });

Route::get('/dashboard', function () {
    return view('dashboards/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});







Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::view('structure','structure.index')->name('structure');

Route::resource('users', UserController::class);
Route::resource('departments', DepartmentController::class);
Route::resource('taxes', TaxController::class);
Route::resource('paystubs',PayRollController::class);
Route::resource('trainings', TrainingProgramController::class);
Route::resource('projects', ProjectController::class);
});
