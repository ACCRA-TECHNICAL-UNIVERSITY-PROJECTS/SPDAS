<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PersonnelController;

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

Route::get('/', [AdminController::class, 'dashboard']);

//Admin Routes
Route::get('/admin/staff_management', [AdminController::class, 'staff_management']);

Route::get('/admin/duty_allocation', [AdminController::class, 'duty_allocation']);

Route::get('/admin/admin_records', [AdminController::class, 'admin_records']);

//Security Personnel Controller
// Route::get('/', [PersonnelController::class, 'index']);

Route::get('/personnel/duty_schedule', [PersonnelController::class, 'duty_schedule']);

Route::get('/personnel/incident_report', [PersonnelController::class, 'incident_report']);

Route::get('/personnel/notifications', [PersonnelController::class, 'notifications']);


