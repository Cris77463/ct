@extends ('layout_produto')

@section('titulo', "")
@section ('conteudo')




@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif






@if ($mensagem = session('mensagem'))

<div class ="alert  alert-sucess" role="alert">

    {{$mensagem}}
</div>


@endif
<h3> <a style="float: right"  href="{{route('produto.index')}}"> Menu <a/> </3>
        <h><h1>Novo cadastro</h1>



            <form action="{{route('produto.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                
                 
                
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input  type="text" class="form-control" name="nome" id="nome">
                </div>

              
                <div class="form-floating">
                    <label for="floatingTextarea">Descrição</label>
                    <textarea class="form-control"  name="descricao" id="descricao"> </textarea>
                 
                </div>
                
               <div class="mb-3">
                   <label for="image" class="form-label">Imagem 1</label>
                    <input  type="file" class="form-control" name="image" id="image">
                </div>
            
                
                
              
                 <div class="mb-3">
                   <label for="image" class="form-label">Imagem 2</label>
                    <input  type="file" class="form-control" name="image2" id="image2">
                </div>

                
               <div class="mb-3">
                   <label for="image" class="form-label">Imagem 3</label>
                    <input  type="file" class="form-control" name="image3" id="image3">
                </div>
                
                
               <div class="mb-3">
                    <label for="marca" class="form-label">Marca</label>
                    <input  type="text" class="form-control" name="marca" id="marca">
                </div>

                   <div class="mb-3">
                    <label for="modelo" class="form-label">Modelo</label>
                    <input  type="text" class="form-control" name="modelo" id="modelo">
                </div>

                <div class="mb-3">
                    <label for="modelo" class="form-label">Sistema Operacional</label>
                    <input  type="text" class="form-control" name="sistema_operacional" id="sistema_operacional">
                </div>

                  <div class="mb-3">
                    <label for="memoria_ram" class="form-label">Memória Ram</label>
                    <input type="text" class="form-control" name="memoria_ram" id="memoria_ram">
                </div>
              
                <div class="mb-3">
                    <label for="memoria_ram" class="form-label">Armazenamento</label>
                    <input type="text" class="form-control" name="armazenamento" id="armazenamento">
                </div>

                <div class="mb-3">
                    <label for="tela" class="form-label">Tela</label>
                    <input type="text" class="form-control" name="tela" id="tela">
                </div>
                

                <div class="mb-3">
                    <label for="tela" class="form-label">Voltagem</label>
                    <input type="text" class="form-control" name="voltagem" id="voltagem">
                </div>
             
               
                <div class="mb-3">
                    <label for="processador" class="form-label">Processador</label>
                    <input type="text" class="form-control" name="processador" id="processador"> 
                </div>

                <div class="mb-3">
                    <label for="preco" class="form-label">Preço</label>
                    <input type="text" class="form-control" name="preco" id="preco">
                </div>
              
                <center> <button type="submit" class="btn btn-primary">Gravar</button></center>
            </form>









            @endsection