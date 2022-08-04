<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class CreateFavoritoProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorito_produtos', function (Blueprint $table) {
$table->id();
$table->unsignedBigInteger('favorito_id'); // unsigned: somente inteiros positivos
$table->unsignedBigInteger('produto_id');// unsigned: somente inteiros positivos
$table->enum('status', ['FA','RE']); 
$table->decimal ('preco', 6, 2)->default (0);


//somente inteiros positivos
$table->timestamps();
$table->foreign('favorito_id')->references('id')->on('favoritos');
$table->foreign('produto_id')->references('id')->on('produtos');

        });
        
        
    
        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favorito_produtos');
    }
}
