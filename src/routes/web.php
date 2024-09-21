<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/', [ContactController::class, 'index']);
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::post('/thanks', [ContactController::class, 'store']);
Route::post('/', [ContactController::class, 'thanks']);
Route::get('/admin', [ContactController::class, 'admin']);
Route::get('/admin/search', [ContactController::class, 'search']);
Route::get('/register', [ContactController::class, 'register_index']);
Route::post('/login', [ContactController::class, 'register']);
Route::get('/login', [ContactController::class, 'login_index']);
Route::post('/admin', [ContactController::class, 'login']);




