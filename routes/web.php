<?php

use App\Http\Controllers\Admin\{ReplySupportController, SupportController};
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use App\Http\Controllers\AniversarioController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\OperacionalController;

use App\Http\Controllers\ListaDeFestasController;

Route::get('/listadefestas', [ListaDeFestasController::class, 'index']);


 //Listar todos os aniversários
Route::get('/aniversarios', 'App\Http\Controllers\AniversarioController@index')->name('aniversarios.index');

// Formulário para criar um novo aniversário
Route::get('/aniversarios/create', 'App\Http\Controllers\AniversarioController@create')->name('aniversarios.create');

// Salvar um novo aniversário
Route::post('/aniversarios', 'App\Http\Controllers\AniversarioController@store')->name('aniversarios.store');

// Mostrar detalhes de um aniversário
Route::get('/aniversarios/{aniversario}', 'App\Http\Controllers\AniversarioController@show')->name('aniversarios.show');

// Formulário para editar um aniversário
Route::get('/aniversarios/{aniversario}/edit', 'App\Http\Controllers\AniversarioController@edit')->name('aniversarios.edit');

// Atualizar um aniversário
Route::put('/aniversarios/{aniversario}', 'App\Http\Controllers\AniversarioController@update')->name('aniversarios.update');

// Excluir um aniversário
Route::delete('/aniversarios/{aniversario}', 'App\Http\Controllers\AniversarioController@destroy')->name('aniversarios.destroy');

// ...

//[Operacional] Entrada na festa:
//Route::get('/operacional/entrada-festa', [OperacionalController::class, 'entradaFesta']);

//[Operacional] Lista de próximas festa
//Route::get('/operacional/proximas-festas', [OperacionalController::class, 'proximasFestas']);

//ADMIN Possibilidade de Cancelar as Festas
//Route::delete('/admin/reserva/{reservaId}/cancelar', [AdminController::class, 'cancelarReserva']);





Route::resource('aniversarios', AniversarioController::class);
Route::resource('users', UserController::class);

Route::get('/', [HomeController::class,'index'])->name('home');

Route::post('login', [AuthenticatedSessionController::class, 'store']);
Route::get('login', [AuthenticatedSessionController::class, 'create'])
->name('login');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::post('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');
    

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
