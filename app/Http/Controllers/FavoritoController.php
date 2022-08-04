<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Produto;
use App\Models\Favorito;
use App\Models\FavoritoProduto;



class FavoritoController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 
    
     function __construct() {
        //obriga estar logado;
        $this->middleware('auth');
    }
  

    //funções dos favoritos
    
    
    public function index()
    {
 $favoritos = Favorito::where('status', '=', 'FA')->where('user_id', '=', Auth::user()->id)->get();
      

        return view('carrinho.favorito', compact('favoritos'));
    }
    
   
     public function store(request $request) {
         
         
        $this->middleware('VerifyCsrfToken');

        $req = Request();
        $idproduto = $req->input('id');
            
        $produto = Produto::find($idproduto);
        if( empty($produto->id) ) {
            $req->session()->flash('mensagem-falha', 'Produto não!');
           return view('carrinho.favorito');
        }

        $idusuario = Auth::id();
//       dd($produto);
        $idfavorito = Favorito::consultaId([
            'user_id' => $idusuario,
            'status'  => 'FA' 
            ]);

        if( empty($idfavorito) ) {
            $favorito_novo = Favorito::create([
                'user_id' => $idusuario,
                'status'  => 'FA'
                ]);

            $idfavorito = $favorito_novo->id;

        }

        FavoritoProduto::create([
            'favorito_id'  => $idfavorito,
            'produto_id' => $idproduto,
            'preco'      => $produto->preco,
            'status'     => 'FA'
            ]);

        $req->session()->flash('mensagem-sucesso', 'Produto adicionado aos favoritos com sucesso!');

       return redirect()->route('/');
        //
    }
    
    
         

 
    
   
      public function apagar($id) {
     
       $favorito_produto = FavoritoProduto::find($id);
   
   
      $favorito_produto->delete();


  return redirect()->route('favorito.index');
 
    }

   
    
   
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request) {



       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }
    
    
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
   
    // $data = $request->all();
}