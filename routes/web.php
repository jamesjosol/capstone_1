<?php

use App\Http\Controllers\AuthController;
use App\Http\Livewire\Home;
use App\Http\Livewire\About;
use App\Http\Livewire\LoginForm;
use App\Http\Livewire\RegisterForm;
use App\Http\Livewire\Dashboard;
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

Route::get('/', Home::class);

Route::get('/about', About::class);

Route::get('/login', LoginForm::class);

Route::get('/register', RegisterForm::class);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/dashboard', Dashboard::class);