<?php


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\FormsController;
use App\Http\Controllers\Admin\CalendarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FoodsController;
use App\Http\Controllers\Admin\ReservasController;
use App\Http\Controllers\Admin\ConvidadosController;
use App\Http\Controllers\Admin\RecomendadoController;
use App\Http\Controllers\Admin\OpinioesController;
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
Route::post('/admin4',[FormsController::class,'RespostasAdmin3'])->name('respostasadmin3.index');
Route::post('/admin5',[FormsController::class,'RespostasAdmin4'])->name('respostasadmin4.index');
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
Route::get('/festa/{id}', [ReservasController::class, 'prefesta'])->name('prefesta.index');
Route::get('/festa/convidados/{id}', [ConvidadosController::class, 'novoconvidado'])->name('convidados.index');
Route::put('/festa/novosconvidados/{id}', [ConvidadosController::class, 'novosconvidados'])->name('novosconvidados.index');
Route::put('/festa/verconvidados/{id}', [ConvidadosController::class, 'verconvidados'])->name('verconvidados.index');
Route::get('/delete/convidado/{id}/{id_festa}', [ConvidadosController::class, 'deleteconvidado'])->name('deleteconvidado.index');
Route::put('/festa/vercomida/{id}', [FoodsController::class, 'verpacotedecomida'])->name('verpacotedecomida.index');
Route::put('/festa/alterarcomida/{id}/{titulo}', [FoodsController::class, 'mudarcomida'])->name('mudarcomida.index');
Route::get('/festa/comidaalterada/{id}/{titulo}', [FoodsController::class, 'alterarcomida'])->name('alterarcomida.index');
Route::post('/inserircomida',[FoodsController::class,'novacomida'])->name('novafood.index');
Route::put('/cancelarreserva/{id}',[ReservasController::class,'cancelarreserva'])->name('cancelarreserva.index');
Route::put('/cancelarreservaadm/{id}',[ReservasController::class,'cancelaradm'])->name('cancelaradm.index');
Route::post('/inserirrecomedacao',[RecomendadoController::class,'novarecomedacao'])->name('novarecomendacao.index');
Route::post('/inserirnovarecomedacao',[RecomendadoController::class,'inserirrecomendacao'])->name('inserirrecomendacao.index');
Route::post('/verrecomendados',[RecomendadoController::class,'verrecomendados'])->name('verrecomendados.index');
Route::get('/editarrecomendados/{id}',[RecomendadoController::class,'updaterecomendados'])->name('updaterecomendados.index');
Route::put('/atualizarrecomendados/{id}',[RecomendadoController::class,'atualizarrecomendados'])->name('atualizarrecomendacao.index');
Route::get('/deletararrecomendados/{id}',[RecomendadoController::class,'deleterecomendados'])->name('deleterecomendados.index');
Route::post('/reservasoperacional',[ReservasController::class,'reservasoperacional'])->name('reservasoperacional.index');
Route::get('/convidadosoperacional/{id}',[ConvidadosController::class,'convidadosoperacional'])->name('convidadosoperacional.index');
Route::get('/aprovarconvidado/{id}/{id_festa}',[ConvidadosController::class,'aprovarconvidado'])->name('aprovarconvidado.index');
Route::put('/festa/novosconvidadosoperacional/{id}', [ConvidadosController::class, 'novoconvidadooperacional'])->name('novoconvidadooperacional.index');
Route::put('/festa/novosconvidadosoperacional1/{id}', [ConvidadosController::class, 'novosconvidadosoperacional'])->name('novosconvidadosoperacional.index');
Route::put('/opiniao/{id}',[OpinioesController::class,'novaopiniao'])->name('opiniao.index');
Route::post('/novaopiniao',[OpinioesController::class,'novaopiniaopost'])->name('novaopiniao.index');
Route::post('/datasoperacional',[ReservasController::class,'datasoperacional'])->name('datasoperacional.index');
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
