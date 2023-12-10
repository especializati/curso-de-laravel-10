<?php
use App\Http\Controllers\SatisfacaoController;
use App\Http\Controllers\Admin\{ReplySupportController, SupportController};
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use App\Http\Controllers\AniversarioController;
use App\Http\Controllers\ConvidadosController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\OperacionalController;
use App\Http\Controllers\ListaDeFestasController;
use App\Http\Controllers\DisponibilidadeController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\PacoteController;
use App\Http\Controllers\EntradaController;

Route::get('/entrada_festa', [EntradaController::class, 'entradaFesta'])->name('entrada_festa');
Route::post('/confirmar-chegada/{id}', [EntradaController::class, 'confirmarChegada'])->name('confirmar_chegada');



// Rota para exibir a visualização dos pacotes
Route::get('/visualizar_pacotes', [PacoteController::class, 'visualizarPacotes'])->name('visualizar_pacotes');

// Rota para exibir o formulário de edição de um pacote específico
Route::get('/editar_pacote/{id}', [PacoteController::class, 'editarPacote'])->name('editar_pacote');

// Rota para processar a atualização do pacote no banco de dados
Route::put('/atualizar_pacote/{id}', [PacoteController::class, 'atualizarPacote'])->name('atualizar_pacote');

// Rota para excluir efetivamente o pacote do banco de dados
Route::delete('/excluir_pacote/{id}', [PacoteController::class, 'excluirPacote'])->name('excluir_pacote');

Route::resource('pacotes', PacoteController::class);
Route::resource('disponibilidades', DisponibilidadeController::class);

Route::get('/listadefestas', [ListaDeFestasController::class, 'index']);

Route::delete('/admin/reserva/{reservaId}/cancelar', [AdminController::class, 'cancelarReserva']);
Route::get('/satisfacao/lista', [AniversarioController::class, 'lista'])->name('satisfacao.lista');

Route::put('aniversarios/{aniversario}', 'AniversarioController@update')->name('aniversarios.update');
Route::resource('aniversarios', AniversarioController::class);
Route::resource('users', UserController::class);
Route::resource('convidados', ConvidadosController::class);

Route::get('/', [HomeController::class,'index'])->name('home');

Route::post('login', [AuthenticatedSessionController::class, 'store']);
Route::get('login', [AuthenticatedSessionController::class, 'create'])
->name('login');
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');


Route::middleware(['auth'])->group(function () {
    // ... outras rotas ...

    Route::get('/aniversarios/confirmar/{aniversario}', [AniversarioController::class, 'confirmarAniversario'])
        ->name('aniversarios.confirmar');

    // ... outras rotas ...
});




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
