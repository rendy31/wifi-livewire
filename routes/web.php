<?php

use App\Livewire\Akun\Mahasiswa\AkunMahasiswaCreate;
use App\Livewire\Akun\Mahasiswa\AkunMahasiswaIndex;
use App\Livewire\Home;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register'=>false]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', Home::class)->name('home');
Route::get('/akunMahasiswa', AkunMahasiswaIndex::class)->name('akun.mahasiswa.index');
Route::get('/akunMahasiswaCreate', AkunMahasiswaCreate::class)->name('akun.mahasiswa.create');
Route::post('/akunMahasiswaStore', AkunMahasiswaCreate::class)->name('akun.mahasiswa.store');
