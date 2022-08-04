<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\FavoritoController;

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
//
//Route::get('/', function () {
//    return view('welcome');
//});
//
//rotas do administrador do site;

route::get('/', [ProdutoController::class, 'listar'])->name('/');

route::get('/admin', [ProdutoController::class, 'restrito'])->name('restrito');
Route::get('/adm', [ProdutoController::class, 'index'])->name('adm');

//rotas do Usuário
route::resource('produto', ProdutoController::class);
route::get('minha_conta', [UserController::class, 'index'])->name('conta')->middleware('auth');
route::get('perfil', [UserController::class, 'edit'])->name('perfil')->middleware('auth');
route::get('atulizar_perfil', [UserController::class, 'update'])->name('perfil.update')->middleware('auth');
route::post('busca', [ProdutoController::class, 'busca'])->name('busca');

route::post('/pesquisar', [ProdutoController::class, 'seach'])->name('seach');


//rotas para o endereço

route::resource('endereco', EnderecoController::class);

//rotas para categorias de Produtos

route::get('intel_i3', [ProdutoController::class, 'listai3'])->name('listai3');
route::get('intel_i5', [ProdutoController::class, 'listai5'])->name('listai5');
route::get('intel_i7', [ProdutoController::class, 'listai7'])->name('listai7');
route::get('intel_i9', [ProdutoController::class, 'listai9'])->name('listai9');



route::get('marca_Acer', [ProdutoController::class, 'marca1'])->name('marca1');
route::get('marca_Dell', [ProdutoController::class, 'marca2'])->name('marca2');
route::get('marca_lenovo', [ProdutoController::class, 'marca3'])->name('marca3');
route::get('marca_samsung', [ProdutoController::class, 'marca4'])->name('marca4');

//rotas de Favoritos na Base de Dados
route::resource('favorito', FavoritoController::class);


Route::delete('{id}/favorito/apagar', [FavoritoController::class, 'apagar'])->name('apagar');


//rotas para o Carrinho de compras em sessão



Route::match(['get'], '/{idproduto}/carrinho/adicionar', [ProdutoController::class, 'adicionarCarrinho'])->name('adicionar');

Route::match(['get', 'post'], '/carrinho', [ProdutoController::class, 'ver_carrinho'])->name('ver_carrinho');

Route::match(['get', 'post'], '/{id}/excluir', [ProdutoController::class, 'excluir_carrinho'])->name('carrinho_excluir');

Route::match(['get', 'post'], '/{id}/excluirUnidade', [ProdutoController::class, 'excluir_unidade'])->name('excluir_unidade');

Route::match(['get', 'post'], '/{id}/adicionarUnidade', [ProdutoController::class, 'adicionar_unidade'])->name('adicionar_unidade');

route::match(['get', 'post'], '/carrinho/finalizar', [ProdutoController::class, 'finalizar'])->name('finalizar');

route::match(['get', 'post'], '/carrinho/confirmacao', [ProdutoController::class, 'confirmacao'])->name('confirmacao');


route::match(['get', 'post'], '/carrinho/pedido', [ProdutoController::class, 'pedido'])->name('pedido');

//route::match(['get', 'post'], '/carrinho/pagar', [ProdutoController::class, 'pagar'])->name('pagar');








Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
