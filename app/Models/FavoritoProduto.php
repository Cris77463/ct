<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class FavoritoProduto extends Model
{
    use HasFactory;
      protected $fillable =
    [
        'favorito_id',
        'produto_id',
        'status',
        'preco'
        
    ];

    
    public function produto() {
        return $this->belongsTo(Produto::class, 'produto_id', 'id');
        
    }
    
    
    
    
}
