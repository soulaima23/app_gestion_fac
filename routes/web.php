<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\TeachersController;

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
Route::prefix('admin')-> middleware('auth')->group(function() {
    Route::get('/home',function(){
        return view ('home');
    });

    Route::resource('Employees',EmployeeController::class);
    Route::resource('Students',StudentController::class);
    Route::resource('Teachers',TeacherController::class);
    Route::resource('Types',typeController::class);

    Route::get('/teachers', function () {
        return view('create');
    });
});