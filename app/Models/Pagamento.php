<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
use HasFactory;


protected $fillable = [
'user_id',
 'cartao_credito',
 'pix',
 'boleto',
];
public function user()
{
return $this->belongsTo(Pagamento::class, 'user_id');


}


}







