<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;
    
     protected $fillable = [
         'user_id',
         'cep',
         'bairro',
         'logradouro',
         'numero',
         'cidade',
         'uf',
       
       
    ];
     
       public function user()
    {
        return $this->belongsTo(Endereco::class , 'user_id');
    }
}
