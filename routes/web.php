<?php

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

Route::get('/', [App\Http\Controllers\ApiController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ADMIN
Route::middleware(['auth', 'auth.admin'])->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.home');
    })->name('admin.home');
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.library');
    Route::get('/stored-books', [App\Http\Controllers\AdminController::class, 'storedBooks'])->name('admin.stored');
    // ELIMINAR LIBROS ADMIN
    Route::delete('/book/{id}', [App\Http\Controllers\BookController::class, 'destroy'])->name('admin.delete');
});
// AÑADIR LIBROS ADMIN
Route::post('/addbook', [App\Http\Controllers\BookController::class, 'create'])->middleware('auth.admin');

// VER DETALLES DE LIBRO
Route::get('/book-info/{id}',  [App\Http\Controllers\BookController::class, 'show'])->name('show');
// VER LIBRERIA
Route::get('/library-user',  [App\Http\Controllers\BookController::class, 'index'])->name('library');
// AÑADIR LIBROS USUARIOS
Route::post('/orderbook', [App\Http\Controllers\OrderedBooksController::class, 'create'])->middleware('auth')->name('orderedbook');
// ELIMINAR LIBROS USUARIOS
Route::delete('/book/{id}',  [App\Http\Controllers\OrderedBooksController::class, 'destroy'])->name('user.delete');
