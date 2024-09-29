<?php

use App\Livewire\Home;
use App\Models\locate;
use App\Livewire\Lokasi\LokasiEdit;
use App\Livewire\Lokasi\LokasiIndex;
use Illuminate\Support\Facades\Auth;
use App\Livewire\Lokasi\LokasiCreate;
use Illuminate\Support\Facades\Route;
use App\Livewire\Category\CategoryEdit;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Livewire\Category\CategoryIndex;
use App\Livewire\Category\CategoryCreate;
use App\Livewire\Akun\Mahasiswa\AkunMahasiswaEdit;
use App\Livewire\Akun\Mahasiswa\AkunMahasiswaIndex;
use App\Livewire\Akun\Mahasiswa\AkunMahasiswaCreate;
use App\Livewire\Akun\Mahasiswa\AkunMahasiswaImport;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [InfoController::class, 'index'])->name('info.index');

Auth::routes(['register'=>false]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', Home::class)->name('home')->middleware('auth');

Route::prefix('akun')->group(function () {
    Route::get('/mahasiswa', AkunMahasiswaIndex::class)->name('mahasiswa.index');
    Route::get('/mahasiswa/create', AkunMahasiswaCreate::class)->name('mahasiswa.create');
    Route::get('/mahasiswa/edit/{id}', AkunMahasiswaEdit::class)->name('mahasiswa.edit');
    
    Route::get('/mahasiswa/import', AkunMahasiswaImport::class)->name('mahasiswa.import');
    Route::get('/mahasiswa/import/format', [AkunMahasiswaImport::class, 'download'])->name('format.import');
    
    Route::get('/category', CategoryIndex::class)->name('category.index');
    Route::get('/category/create', CategoryCreate::class)->name('category.create');
    Route::get('/category/edit/{id}', CategoryEdit::class)->name('category.edit');

})->middleware('auth');

Route::prefix('wifi')->group(function () {
    // Route::get('/form', [InfoController::class, 'index'])->name('info.index');
    Route::post('/show', [InfoController::class, 'show'])->name('show.index');
})->middleware('auth');

Route::prefix('config')->group(function () {
    Route::get('/locate', LokasiIndex::class)->name('locate.index');
    Route::get('/locate/create', LokasiCreate::class)->name('locate.create');
    Route::get('/locate/edit/{id}', LokasiEdit::class)->name('locate.edit');
})->middleware('auth');
