<?php

use App\Http\Controllers\aniversariantesController;
use App\Http\Controllers\avisosController;
use App\Http\Controllers\casamentoController;
use App\Http\Controllers\contatosController;
use App\Http\Controllers\financaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ministeriosController;
use App\Http\Controllers\pdfController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\userMinisterioController;
use App\Http\Controllers\usuarioController;
use App\Models\User;
use FontLib\Table\Type\name;
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

// ANIVERSARIATES
Route::get('/Aniversariantes/aniversariante', [aniversariantesController::class,'aniversariante'])->middleware('auth');

Route::get('/Aniversariantes/aniversariante', [aniversariantesController::class, 'showOneUser']); 

Route::post('/Aniversariantes', [aniversariantesController::class, 'storeAniversario']);
Route::delete('/Aniversariantes/{id}', [aniversariantesController::class, 'apagar']);
Route::get('/Aniversariantes/editar/{id}', [aniversariantesController::class, 'editar']);
Route::put('/Aniversariantes/update/{id}', [aniversariantesController::class, 'update']);
Route::get('/Total/aniversariantes', [aniversariantesController::class,'totalAniversariantes']);

// Pesquisar data
Route::get('/Total', [aniversariantesController::class,'filtrar']);

// FINANCAS
Route::get('/financas/financa',[financaController::class,'index'])->middleware(['auth', 'admin']);

// Dizimo
Route::get('/dizimo/dizimo', [financaController::class, 'dizimo']) ->middleware(['auth', 'admin']);; 
Route::post('/dizimo/dizimo', [financaController::class, 'storeDizimo']);
Route::delete('/dizimo/{id}', [financaController::class, 'apagarDizimo']);
Route::get('/dizimo/editarDizimo/{id}', [financaController::class, 'editarDizimo']);
Route::put('/dizimo/update/{id}', [financaController::class, 'updateDizimo']);

// OFERTA
Route::get('/ofertas/oferta',[financaController::class,'oferta'])->middleware(['auth', 'admin']);;
Route::post('/ofertas/oferta', [financaController::class, 'storeOferta']);
Route::delete('/ofertas/{id}', [financaController::class, 'apagar']);
Route::get('/ofertas/editar/{id}', [financaController::class, 'editar']);
Route::put('/ofertas/update/{id}', [financaController::class, 'update']); 

// Negocio  imprimirDizimo
Route::get('/Negocio/financas',[financaController::class,'Negocio'])->middleware(['auth', 'admin']);
Route::get('/imprimir/imprimirDizimo',[financaController::class,'imprimirDizimo'])->middleware(['auth', 'admin']);

// MINISTERIOSREGISTO
Route::get('/MinisteriosRegisto/ministerio', [ministeriosController::class,'MinisterioRegisto'])->middleware(['auth', 'admin']);
Route::post('/MinisteriosRegisto', [ministeriosController::class, 'storeMinisterioRegisto']);
Route::delete('/MinisteriosRegisto/{id}', [ministeriosController::class, 'apagarMinisterioRegisto']);
Route::get('/MinisteriosRegisto/editar/{id}', [ministeriosController::class, 'editarRegisto']);
Route::put('/MinisteriosRegisto/update/{id}', [ministeriosController::class, 'updateRegisto']);


// MINISTERIOUSER
Route::get('/MinisteriosUser/userMinisterio', [userMinisterioController::class,'Ministerio']);
Route::post('/MinisteriosUser', [userMinisterioController::class, 'storeMinisterio']);
Route::delete('/MinisteriosUser/{id}', [userMinisterioController::class, 'apagar']);
Route::get('/MinisteriosUser/editar/{id}', [userMinisterioController::class, 'editar']);
Route::put('/MinisteriosUser/update/{id}', [userMinisterioController::class, 'update']);
//show only user
Route::get('/MinisteriosUser/userMinisterio', [userMinisterioController::class, 'showOneUser']);
// detalhes dos Ministerios para user
Route::get('/MinisteriosUser/detalhesMinisterio', [ministeriosController::class,'detalhesMinisterio']);
//Total de registados no ministerio
Route::get('/Total/total', [userMinisterioController::class,'total']);



Route::get('/home',[HomeController::class,'index'])->middleware('auth')->name('home');
Route::get('post',[HomeController::class,'post'])->middleware(['auth', 'admin']);


// IGREJA
Route::get('/igreja/quem_somos', function () {
    return view('/igreja/quem_somos');
});



// AVISOS
 
Route::get('/Avisos/aviso', [avisosController::class,'aviso']);
Route::post('/Avisos', [avisosController::class,'storeAviso'])->middleware(['auth', 'admin']);
Route::get('/Avisos/listaAviso/lista', [avisosController::class,'listaAviso']);
Route::delete('/Avisos/{id}', [avisosController::class, 'apagar']);
Route::get('/Avisos/editar/{id}', [avisosController::class, 'editar']);
Route::put('/Avisos/update/{id}', [avisosController::class, 'update']);

// NOtificar User
Route::get('/notificaUser', [avisosController::class,'notificaUser'])->name('Avisos');
Route::get('marcarLido/{id}', [avisosController::class,'markAsRead'])->name('marcarLido');
Route::get('allRead', [avisosController::class,'allRead'])->name('allRead');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// PDF
Route::get('/imprimir/imprimirDizimo', [pdfController::class, 'viewImpresao'])->middleware(['auth', 'admin']);;

Route::get('/imprimir/gerarDizimo', [pdfController::class, 'generateImpresao'])->middleware(['auth', 'admin']);;


// CONTACTOS
Route::get('/contactos_igreja/contactos',[contatosController::class,'contactos']);
Route::post('/contactos_igreja', [contatosController::class, 'storeContactos']);

Route::post('/send', [contatosController::class, 'send'])->name('send.email');

// CASAMENTO

Route::get('/casamento/casamento',[casamentoController::class,'casamento']);
Route::post('/casamento',[casamentoController::class,'storeCasamento']);
Route::delete('/casamento/{id}', [casamentoController::class, 'apagar']);
Route::get('/casamento/editar/{id}', [casamentoController::class, 'editar']);
Route::put('/casamento/update/{id}', [casamentoController::class, 'update']);


Route::get('/casamento/casamentoDetaill',[casamentoController::class,'casamentoDetaill']);
Route::get('/casamento/casamentoDetaill', [casamentoController::class, 'showOneUser']); 


// ALLL

Route::get('/Detalhes/usuarioDetalhes', [usuarioController::class, 'usuarios']); 
Route::get('/Detalhes/casamento', [usuarioController::class, 'casamento']); 
Route::get('/Detalhes/aniversariante', [usuarioController::class, 'aniversariante']); 
Route::get('/Detalhes/inscritosMinisterio', [usuarioController::class, 'inscritos']); 
Route::get('/Modal/avisos', [usuarioController::class, 'avisos']); 

// Route::get('/Detalhes/usuarioDetalhes/{id}', [usuarioController::class, 'editar']);
// Route::put('/Detalhes/update/{id}', [usuarioController::class, 'update']);

 

