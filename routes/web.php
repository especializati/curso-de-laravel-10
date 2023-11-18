<?php

use App\Http\Controllers\Admin\{ReplySupportController, SupportController};
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use App\Http\Controllers\AniversarioController;
use App\Http\Controllers\ReservaController;

// ...



// *Comercial* Lista de Requests de aniversários/Status
//Route::get('/reservas', [ReservaController::class, 'listarReservas']);

// Formulário para criar um novo aniversário OBS: Substituí o Controller de Aniversário por de Reserva por questões práticas
//Route::get('/reservar', 'ReservaController@formulario');
//Route::post('/reservar', 'ReservaController@solicitarReserva');

// Formulário para editar um aniversário
//Route::get('/reserva/{reservaId}/confirmar-presenca', [ReservaController::class, 'formularioConfirmacao']);
//Route::post('/reserva/{reservaId}/confirmar-presenca', [ReservaController::class, 'confirmarPresenca']);
//Route::get('/reserva/{reservaId}/lista-convidados', [ReservaController::class, 'listaConvidados']);
//Route::delete('/reserva/{reservaId}/remover-convidado/{convidadoId}', [ReservaController::class, 'removerConvidado']);

//Visualização do pacote de comidas escolhido.
//Route::get('/reserva/{reservaId}/visualizar-pacote', [ReservaController::class, 'visualizarPacote']);
//Route::post('/reserva/{reservaId}/trocar-pacote', [ReservaController::class, 'trocarPacote']);

//Lista de Recomendações e o Cancelamento de Reserva
//Route::get('/reserva/{reservaId}/recomendacoes', [ReservaController::class, 'listaRecomendacoes']);
//Route::delete('/reserva/{reservaId}/cancelar', [ReservaController::class, 'cancelarReserva']);










// Salvar um novo aniversário
//Route::post('/aniversarios', 'App\Http\Controllers\AniversarioController@store')->name('aniversarios.store');

// Mostrar detalhes de um aniversário
//Route::get('/aniversarios/{aniversario}', 'App\Http\Controllers\AniversarioController@show')->name('aniversarios.show');



// Atualizar um aniversário
//Route::put('/aniversarios/{aniversario}', 'App\Http\Controllers\AniversarioController@update')->name('aniversarios.update');

// Excluir um aniversário
//Route::delete('/aniversarios/{aniversario}', 'App\Http\Controllers\AniversarioController@destroy')->name('aniversarios.destroy');

// ...

Route::resource('aniversarios', AniversarioController::class);




Route::get('/', [HomeController::class,'index'])->name('home');

Route::post('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::post('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/login/custom', [LoginController::class, 'auth'])->name('login.custom');

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
