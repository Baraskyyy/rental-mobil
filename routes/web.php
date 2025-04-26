<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\form;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;
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

route::controller(AuthController::class)->group(function(){
    route::get('/login', 'halaman_login')->name('login');
});

route::controller(homeController::class)->group(function(){
    route::get('/', 'index')->name('home');
    route::get('/detail/{id}', 'detail')->name('detail');
    route::get('/mobil', 'mobil')->name('mobil');
});

route::controller(form::class)->group(function(){
    route::get('/form', 'index')->name('form');
    route::post('/form', 'store')->name('form.store');
    
});

route::controller(adminController::class)->group(function(){
    route::get('/dashboard', 'index')->name('dashboard');
    route::get('/data', 'data')->name('data');
    route::get('/pesanan', 'pesanan')->name('pesanan');
    // route::get('/tambah-data', 'tambah_data')->name('tambah-data');
    route::post('/tambah_data', 'store')->name('tambah_data.store');
    route::post('/data-delete', 'destroy')->name('data.destroy');
    route::post('/data-edit', 'edit')->name('data.edit');
}); 