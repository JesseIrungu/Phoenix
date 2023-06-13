<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\AdminsController;

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

view()->composer('layouts.app', function ($view) {
    $view->with('user', auth()->user());
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/phoenixhome',[AdminsController::class,'phoenixhome']);
Route::get('/homepage',[AdminsController::class,'homepage']);
Route::get('/services',[ClientsController::class,'services']);

Route::get('/userlogin',[ClientsController::class,'userLogin']);
Route::get('/registration',[ClientsController::class,'registration']);
Route::get('/phoenixtech',[ClientsController::class,'phoenixtech']);
Route::get('/techniche',[ClientsController::class,'techniche']);
Route::post('/register-client',[ClientsController::class,'registerClient'])->name('register-client');
Route::post('/login-client',[ClientsController::class,'loginClient'])->name('login-client');
Route::get('/clientsdashboard',[ClientsController::class,'clientsDashboard']);
Route::get('/request',[ClientsController::class,'enquiries']);
Route::post('/store-message',[ClientsController::class,'storeMessage'])->name('store-message');
Route::get('/messages',[ClientsController::class,'showMessages']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/adminlogin',[AdminsController::class,'adminLogin']);
Route::post('/login-admin',[AdminsController::class,'loginAdmin'])->name('login-admin');
Route::get('/adminsdashboard',[AdminsController::class,'adminsDashboard']);
Route::get('/logout',[AdminsController::class,'logout']);
Route::get('/clients',[AdminsController::class,'listClients']);
Route::get('/edit-client/{id}',[AdminsController::class,'editClient'])->name('edit-client');
Route::get('/delete-client/{id}',[AdminsController::class,'deleteClient'])->name('deleteclient');
Route::post('/update-client',[AdminsController::class,'updateClient'])->name('update-client');
