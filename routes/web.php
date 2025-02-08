<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Contact\ContactController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [SiteController::class,'index'])->name('index');

Route::get('contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::get('contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('contacts', [ContactController::class, 'store'])->name('contacts.store');
Route:: delete('contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');

// Rota para exibir a view que contém o formulário de edição
Route::get('contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');

 //Nessa Rota usamos o put para permitir a atualiçõo do registro
Route::put('contacts/{id}', [ContactController::class, 'update'])->name('contacts.update');