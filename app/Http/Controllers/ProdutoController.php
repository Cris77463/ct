<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProdutoRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Produto;
use App\Models\Endereco;
use App\Models\Pagamento;
use App\Models\Favorito;
use App\Models\FavoritoProduto;

//use PagSeguro\Configuration\Configure;

class ProdutoController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     * 
     * 
     *
     */
    //CONFIGURAÇÃO DO PAGSEGURO
    //private $_configs;

   // public function __construct(){
  //  $this->_configs = new Configure();
       //  $this->_configs->setCharset("UTF-8");
        //   $this->_configs->setAccounCredentials(env("PAGSEGURO_EMAIL"), env("PAGSEGURO_TOKEN"));
        //   $this->_configs->setEnvironment(env("PAGSEGURO_AMBIENTE"));
         //  $this->_configs->setLog(true , storage_path('logs/pagseguro_' .date('Ymd') . '.log'));
      //  $this->middleware('auth')->except(['listar', 'busca', 'show','marca1','marca2','marca3','marca4']);
        
        
   //  }

    //public function getCredential(){
       // return $this->_configs->getAccountCredentials();
    //}

    public function __construct() {
      $this->middleware('auth')->except(['listar', 'busca', 'show','marca1','marca2','marca3','marca4']);
      
 }

    //funções de Produtos da Vitrine







    public function show(produto $produto) {



        return view('detalhes', ['produto' => $produto]
        );
    }

    public function busca(Request $request) {
        $request->validate(['nome' => ['required']]);
        $produtos = (new produto())->busca($request->nome);
  

        return view('busca', ['produtos' => $produtos]);
    }

    //funções de produtos do ADM




    public function listar() {



       $produtos = Produto::where('status', '=', 'ATIVADO')->paginate(6);
//        $produtos = Produto::paginate(6);
        $user = Auth::user();
        if ($user) {
            if ($user->tipo == 'Adm') {

                return redirect()->route('adm');
            }
        }


        return view('vitrine', ['produtos' => $produtos]);
    }
    
    
    public function restrito(){
        $user = Auth::user();
        if ($user) {

            return redirect()->route('/');
        }


        $produtos = Produto::paginate(6);




        return view('admin', ['produtos' => $produtos]);
    }

    public function index() {
        $user = Auth::user();
        if ($user) {
            if ($user->tipo == 'User') {

                return redirect()->route('/');
            }
        }
        $produtos = Produto::paginate(7);




        return view('index3', ['produtos' => $produtos]);
    }

    //

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response




     */
    public function create() {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProdutoRequest $request) {

        $data = $request->all();

        if ($request->hasFile('image')) {

            $data['image'] = $request->image->store('fotos');
        }

        if ($request->hasFile('image2')) {

            $data['image2'] = $request->image2->store('fotos');
        }


        if ($request->hasFile('image3')) {

            $data['image3'] = $request->image3->store('fotos');
        }

        Produto::create($data);

        $mensagem = "Produto {$request->nome} cadastrado com sucesso";


        return redirect()->route('produto.index')->with('mensagem', $mensagem);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\produto  $produto
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(produto $produto) {
        return view('editar', ['produto' => $produto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, produto $produto) {
        $mensagem = "cadastrado atualizado com sucesso.";



        $data = $request->all();

        if ($request->hasFile('image')) {

            if (Storage::exists($produto->image)) {
                Storage::delete($produto->image);
            }


            $data['image'] = $request->image->store('fotos');
        }


        if ($request->hasFile('image2')) {

            if (Storage::exists($produto->image2)) {
                Storage::delete($produto->image2);
            }


            $data['image2'] = $request->image2->store('fotos');
        }





        if ($request->hasFile('image3')) {

            if (Storage::exists($produto->image3)) {
                Storage::delete($produto->image3);
            }


            $data['image3'] = $request->image3->store('fotos');
        }








        $produto->update($data);

        return redirect()->route('produto.index')->with('mensagem', $mensagem);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(produto $produto) {

        $mensagem = "{$produto->nome} removido com sucesso.";


        if (Storage::exists($produto->image)) {
            Storage::delete($produto->image);
        }
        if (Storage::exists($produto->image2)) {
            Storage::delete($produto->image2);
        }
        if (Storage::exists($produto->image3)) {
            Storage::delete($produto->image3);
        }

        $produto->delete();

        return redirect()->route('produto.index')->with('mensagem', $mensagem);
    }

    public function seach(Request $request) {
        $request->validate(['nome' => ['required']]);
        $produtos = (new produto())->busca($request->nome);


        return view('index3', ['produtos' => $produtos]);
    }

    // funções para as categorias de Produtos


    public function marca4() {
        
            $padroes = Produto::padroes();
             $produtos = Produto::paginate(6);

        
    return view('Categoria/marca4', ['padroes' => $padroes,'produtos' => $produtos]);
            
        }
        
        
        
   public function marca3() {

        $moldes = Produto::moldes();
         $produtos = Produto::paginate(6);
        

        return view('Categoria/marca3', ['moldes' => $moldes,'produtos' => $produtos]);
    }

    public function marca2() {

        $especies = Produto::especies();
        $produtos = Produto::paginate(6);

        return view('Categoria/marca2', ['especies' => $especies, 'produtos' => $produtos]);
    }

    public function marca1() {

        $marcas = Produto::marcas();
        $produtos = Produto::paginate(6);
  
     
        return view('Categoria/marca1', ['marcas' => $marcas,'produtos' => $produtos]);
    }

  
    //funçoes para o carrinho de Compras



    public function adicionarCarrinho($idProduto, Request $request) {
        $produto = Produto::find($idProduto);

        if ($produto) {

            $carrinho = session('cart', []);


            if (isset($carrinho[$produto->id][1])) {
                //echo "carrinho já existe.";
                $carrinho[$produto->id][0] = $carrinho[$produto->id][0] + 1;
            } else {
                //echo "carrinho não existe.";
                $carrinho[$produto->id][1] = $produto;
                $carrinho[$produto->id][0] = 1;
            }


            session(['cart' => $carrinho]);
        }
        return redirect()->route('ver_carrinho');
    }

    public function ver_carrinho(Request $request) {
        $dados = session('cart', []);



        //dd($dados);

        return view("carrinho/carrinho", ['cart' => $dados]);
    }

    public function excluir_carrinho($id) {
        $carrinho = session('cart', []);
        if (isset($carrinho[$id])) {
            unset($carrinho[$id]);
        }
        session(['cart' => $carrinho]);
        return redirect()->route('ver_carrinho');
    }

    public function excluir_unidade($id) {
        $carrinho = session('cart', []);
        if (isset($carrinho[$id])) {
            if ($carrinho[$id][0] == 1)
                unset($carrinho[$id]);
            else {
                $carrinho[$id][0] = $carrinho[$id][0] - 1;
            }
        }
        session(['cart' => $carrinho]);
        return redirect()->route('ver_carrinho');
    }

    public function adicionar_unidade($id) {
        $carrinho = session('cart', []);
        if (isset($carrinho[$id])) {
            $carrinho[$id][0] = $carrinho[$id][0] + 1;
        }
        session(['cart' => $carrinho]);
        return redirect()->route('ver_carrinho');
    }

    public function finalizar(Request $request) {
        $enderecos = Endereco::where('user_id', '=', Auth::user()->id)->get();
        $pagamentos = Pagamento::all();

        return view('pedido/finalizar', compact('enderecos', 'pagamentos'));
    }

    public function confirmacao(Request $request) {
        $pag = Request('pagamento');
        $end = Request('endereco');
        $enderecos = Endereco::where('id', '=', $end)->get();
        $pagamentos = Pagamento::where('id', '=', $pag)->get();
        $carts = session('cart', []);

        return view('pedido/confirmacao', compact('carts', 'enderecos', 'pagamentos'));
    }

    public function pedido(Request $request) {
        $pag = Request('pagamento');
        $end = Request('endereco');
        $enderecos = Endereco::where('id', '=', $end)->get();
        $pagamentos = Pagamento::where('id', '=', $pag)->get();
        $carts = session('cart', []);
        $request->session()->forget('cart');

        return view('pedido/concluido', compact('carts', 'enderecos', 'pagamentos'));
    }

    //public function pagar(Request $request){
       // $data = [];
       // $sessionCode = \PagSeguro\Services\Session::create(
          //  $this->getCredential()
       // );
//
     //   $IDSession = $sessionCode->getResult();
      //  $data["sessionID"] = $IDSession;

     //   return view("pedido/pagar", $data);
   // 
  //  }
}

