<?php

use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

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

Route::get('/add-roles', [RoleController::class, 'addRole']);

Route::get('/add-users', [RoleController::class, 'addUser']);

Route::get('/rolesbyuser/{id}', [RoleController::class, 'getAllRolesByUser']);
Route::get('/usersbyrole/{id}', [RoleController::class, 'getAllUsersByRole']);
