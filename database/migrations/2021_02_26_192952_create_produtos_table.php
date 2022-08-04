<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
/**
 * Run the migrations.
 *
 * @return void
 */
public function up()
{
Schema::create('produtos', function (Blueprint $table) {
$table->id();
$table->string('nome');
$table->longText('descricao');
$table->string('image');
$table->string('image2');
$table->string('image3');
$table->string('marca');
$table->string('modelo');
$table->string('sistema_operacional');
$table->string('memoria_ram');
$table->string('armazenamento');
$table->string('tela');
$table->string('voltagem');
$table->enum('status', ['ATIVADO', 'DESATIVADO'])->default('ATIVADO');
$table->string('processador');
$table->decimal('preco');
$table->timestamps();

});
}









/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
Schema::dropIfExists('produtos');
}
}
