<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ContactoAdminController;


Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    
   
    Route::get('/contactos', [ContactoController::class, 'index'])->name('contactos.index');

   
    Route::get('/contactos/create', [ContactoController::class, 'create'])->name('contactos.create');

    Route::post('/contactos', [ContactoController::class, 'store'])->name('contactos.store');

    
    Route::get('/contactos/{id}', [ContactoController::class, 'show'])->name('contactos.show');
});


Route::get('/solicitud/{uuid}', [ContactoController::class, 'verPublico'])->name('solicitud.ver');


Route::get('/', function () {
    return view('welcome');
})->name('inicio');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.store');


Route::get('/solicitud/{uuid}', [ContactoController::class, 'verSolicitud'])->name('solicitud.ver');

Route::get('/dashboard', function () {
    return redirect()->route('admin.contactos.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Perfil de usuario
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/contactos', [ContactoAdminController::class, 'index'])->name('contactos.index');
    Route::get('/contactos/{contacto}', [ContactoAdminController::class, 'show'])->name('contactos.show');
    Route::post('/contactos/{contacto}/responder', [ContactoAdminController::class, 'responder'])->name('contactos.responder');
});



require __DIR__.'/auth.php';