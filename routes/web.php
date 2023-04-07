<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [GuestController::class, 'index']);
use App\Http\Controllers\admincontroller;
route::get('/admin/dashboard', [admincontroller::class, 'index']);
route::get('/admin/aboutme', [admincontroller::class, 'aboutme']);
route::get('/admin/doing', [admincontroller::class, 'doing']);
route::get('/admin/music', [admincontroller::class, 'music']);
route::get('/admin/friends', [admincontroller::class, 'friends']);
route::get('/admin/lucu', [admincontroller::class, 'lucu']);