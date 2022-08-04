<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class produto extends Model {

    use HasFactory;

    protected $fillable = [
        'status',
        'nome',
        'descricao',
        'image',
        'image2',
        'image3',
        'marca',
        'modelo',
        'memoria_ram',
        'armazenamento',
        'tela',
        'processador',
        'preco',
        'sistema_operacional',
        'voltagem'
    ];

    public function busca(string $nome) {


        return $this->where('nome', 'like', "%$nome%")->where('status', '=', 'ATIVADO')->paginate(6);
    }

    public function seach(string $nome) {


        return $this->where('nome', 'like', "%$nome%")->paginate(6);
              
        
        
        
        
    }
    
    
    
    
    

    public static function marcas() {


        return DB::select("SELECT id,nome,descricao,image,marca,modelo,sistema_operacional,memoria_ram,armazenamento,tela,voltagem,processador,preco FROM produtos WHERE marca='Acer' ");
    }

    public static function especies() {


        return DB::select("SELECT id,nome,descricao,image,marca,modelo,sistema_operacional,memoria_ram,armazenamento,tela,voltagem,processador,preco FROM produtos WHERE marca='Dell'");
    }

    public static function moldes() {


        return DB::select("SELECT id,nome,descricao,image,marca,modelo,sistema_operacional,memoria_ram,armazenamento,tela,voltagem,processador,preco FROM produtos WHERE marca='Lenovo'");
    }

    public static function padroes() {


        return DB::select("SELECT id,nome,descricao,image,marca,modelo,sistema_operacional,memoria_ram,armazenamento,tela,voltagem,processador,preco FROM produtos WHERE marca='Samsung'");
    }

  

}
