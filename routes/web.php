<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
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
    return view('auth.login');
});
Route::resource('roles',RoleController::class);
Auth::routes([
    'verify'=>true
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('user.home')->middleware('verified');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum','verified'])->get('/dash',function(){
 return view('dash.index');   
})->name('dash');

Route::middleware(['auth:sanctum','verified'])->get('/users',function(){
    return view('users.index');   
   })->name('users');