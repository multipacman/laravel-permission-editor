<?php 

use Illuminate\Support\Facades\Route;
use multipacman\LaravelPermissionEditor\Http\Controllers\PermissionController;
use multipacman\LaravelPermissionEditor\Http\Controllers\RoleController;

Route::resource('roles', RoleController::class);
Route::resource('permissions', PermissionController::class);


?>