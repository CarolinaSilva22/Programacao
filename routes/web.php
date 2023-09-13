<?php

use Illuminate\Support\Facades\Route;

Route::middleware('LogAcesso')
->get('/', [App\Http\Controllers\PrincipalController::class, 'index'])
->name('site.principal');

Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato', [App\Http\Controllers\ContatoController::class, 'store'])->name('site.store');
Route::get('/sobre', [App\Http\Controllers\SobreController::class, 'sobre'])->name('site.sobre');
Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('site.login');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'autenticar'])->name('site.login');

//------------------------------------------------------//

Route::middleware('autenticacao')->prefix('/app')->name('app.')->group(function() {
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/sair', [App\Http\Controllers\LoginController::class, 'sair'])->name('sair');
});

Route::middleware('autenticacao')->prefix('/app/fornecedores')->name('app.fornecedor.')->group(function() {
Route::get('/', [App\Http\Controllers\FornecedorController::class, 'index'])->name('fornecedor');
Route::post('/listar', [App\Http\Controllers\FornecedorController::class, 'listar'])->name('listar');
Route::get('/adicionar', [App\Http\Controllers\FornecedorController::class, 'adicionar'])->name('adicionar');
Route::post('/adicionar', [App\Http\Controllers\FornecedorController::class, 'adicionar'])->name('adicionar');
Route::get('/editar/{id}', [App\Http\Controllers\FornecedorController::class, 'edit'])->name('editar');
Route::get('/exculir/{id}', [App\Http\Controllers\FornecedorController::class, 'destroy'])->name('excluir');
});

Route::middleware('autenticacao')->prefix('/app/produtos')->name('app.produto.')->group(function() {
Route::get('/', [App\Http\Controllers\ProdutoController::class, 'index'])->name('produto');
Route::get('/create', [App\Http\Controllers\ProdutoController::class, 'create'])->name('create');
Route::post('/create', [App\Http\Controllers\ProdutoController::class, 'store'])->name('store');
Route::get('/edit/{id}', [App\Http\Controllers\ProdutoController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [App\Http\Controllers\ProdutoController::class, 'update'])->name('update');
Route::get('/detalhes', [App\Http\Controllers\ProdutoController::class, 'show'])->name('show');
Route::get('/destroy/{id}', [App\Http\Controllers\ProdutoController::class, 'destroy'])->name('destroy');

Route::get('/editar', [App\Http\Controllers\ProdutoController::class, 'editar'])->name('editar');
Route::put('/atualizar', [App\Http\Controllers\ProdutoController::class, 'atualizar'])->name('atualizar');
});

Route::middleware('autenticacao')->prefix('/app/cliente')->name('app.cliente.')->group(function() {
    Route::get('/', [App\Http\Controllers\ClienteController::class, 'index'])->name('cliente');

});