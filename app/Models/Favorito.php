<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Favorito extends Model
{
    use HasFactory;
    protected $fillable = ['status', 'user_id'];
 

  

    public function favorito_produtos() 
    
    {
        return $this->hasMany(FavoritoProduto::class);
        
            
    }

    
public static function consultaId ($where)
{
$favorito = self::where($where) ->first(['id']);
return !empty($favorito->id) ? $favorito->id :null;
}
 


     
}
