<?php

use App\Http\Controllers\Admin\{ReplySupportController, SupportController};
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\FormsController;
use App\Http\Controllers\Admin\CalendarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FoodsController;
use App\Http\Controllers\Admin\ReservasController;
Route::put('/{id}',[FormsController::class,'editaragenda'])->name('editaragenda.index');
Route::put('/food/{id}',[FormsController::class,'editarfood'])->name('editarfood.index');
Route::get('/formulario', [FormsController::class,'formulario'])->name('formulario.index');
Route::get('/cadastro', [FormsController::class,'cadastro'])->name('cadastro.index');
Route::post('/cadastro', [FormsController::class,'cadastrar'])->name('cadastrar.index');
Route::get('/login1', [FormsController::class,'login'])->name('login.index');
Route::post('/login1', [FormsController::class,'fazerlogin'])->name('fazerlogin.index');
Route::post('/admin1',[FormsController::class,'RespostasAdmin'])->name('respostasadmin.index');
Route::post('/admin2',[FormsController::class,'RespostasAdmin1'])->name('respostasadmin1.index');
Route::post('/admin3',[FormsController::class,'RespostasAdmin2'])->name('respostasadmin2.index');
Route::post('/agendaCRUD',[CalendarioController::class,'inseriragenda'])->name('inseriragenda.index');
Route::get('/agenda',[CalendarioController::class,'agenda'])->name('agenda.index');
Route::get('/',[FormsController::class,'paginapublica'])->name('paginainicial.index');
Route::post('/food',[FoodsController::class,'foodintro'])->name('foodintro.index');
Route::post('/foodview',[FoodsController::class,'foodsview'])->name('foodview.index');
Route::post('/foodaniversariante',[FoodsController::class,'foodaniversariante'])->name('foodaniversariante.index');
Route::get('/edit/{id}', [FormsController::class, 'editdate'])->name('editdate.index');
Route::get('/editfood/{id}', [FormsController::class, 'editfood'])->name('editfood.index');
Route::get('/delete/{id}', [FormsController::class, 'deleteagenda'])->name('delete.index');
Route::get('/deletefood/{id}', [FormsController::class, 'deletefood'])->name('deletefood.index');
Route::post('/inseriragenda',[CalendarioController::class,'novaagenda'])->name('novaagenda.index');
Route::put('/calendarioreserva/{nome}',[CalendarioController::class,'calendarioreserva'])->name('calendarioreserva.index');
Route::get('{nome}/reserva/{id}', [ReservasController::class, 'novareserva'])->name('fazerreserva.index');
Route::put('/fazerreserva/{id}/{nome}', [ReservasController::class, 'inserirreserva'])->name('inserirreserva.index');
Route::get('admin/reservaaprovar/{id}', [ReservasController::class, 'aprovar'])->name('aprovar.index');
Route::get('admin/reservanegar/{id}', [ReservasController::class, 'negar'])->name('negar.index');
Route::put('/verreserva/{nome}', [ReservasController::class, 'verreserva'])->name('verreserva.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/supports/{id}/replies', [ReplySupportController::class, 'store'])->name('replies.store');
    Route::delete('/supports/{id}/replies/{reply}', [ReplySupportController::class, 'destroy'])->name('replies.destroy');
    Route::get('/supports/{id}/replies', [ReplySupportController::class, 'index'])->name('replies.index');

    // Route::resource('/supports', SupportController::class);
    Route::delete('/supports/{id}', [SupportController::class, 'destroy'])->name('supports.destroy');
    Route::put('/supports/{id}', [SupportController::class, 'update'])->name('supports.update');
    Route::get('/supports/{id}/edit', [SupportController::class, 'edit'])->name('supports.edit');
    Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create');
    Route::post('/supports', [SupportController::class, 'store'])->name('supports.store');
    Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');
});

require __DIR__ . '/auth.php';
