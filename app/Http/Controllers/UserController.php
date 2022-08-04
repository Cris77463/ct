<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    
    
      public function index() {
          
           return view('conta/conta');
          
          
          
      }
    
     public function edit() {
        return view('conta/Editaruser');
    }
    
    
    
     public function update(Request $request) {
//         dd($request->all());  
        $mensagem = "Perfil atualizado";
         $data = $request->all();
        $update = Auth()->user()->update($data);
        if ($update){
            return redirect()->route('perfil')->with('mensagem', $mensagem);
        
        }
        
    }
    

    
    

    
}
