@extends ('layout_Produto')

@section('titulo', "Administração")


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



<h3> <a style="float: right"  href="{{route('produto.index')}}"> Menu <a/> </3>
        <h><h1>Editar Produto</h1>



            <form action="{{route('produto.update', $produto->id)}}" method="post" enctype="multipart/form-data">

                @csrf
                @method('PATCH')

                <div class="input-field">
                    <div style="margin-bottom: 3px;"> Status </div>
                    <select class="form-control" id="status" name="status" style="margin-bottom: -11px; font-size: 15px; padding: 0.5px; margin-bottom: 10px; width:150px; ">
                        <option value="ATIVADO">ATIVADO</option>
                        <option value="DESATIVADO">DESATIVADO</option>
                    </select>
                </div>


                <div class="mb-3">
                    <label for="marca" class="form-label">Nome</label>
                    <input  type="text" class="form-control" value="{{$produto->nome}}" name="nome" id="nome">
                </div>

                <div class="form-floating"> 
                    
                 
                    
                    <label for="floatingTextarea">Descrição</label>
                    <textarea class="form-control" placeholder="descricao"  name="message" rows="10" cols="30">{{$produto->descricao}}</textarea>

                </div>

                <div class="mb-3">

                    <img style="width: 250px; height:250px;"  src="{{asset('storage/' . $produto->image)}}" name="image" id="image"> 
                    <input id="image" class="block mt-1 w-full" type="file" name="image" >
                </div>


                <div class="mb-3">

                    <img style="width: 250px; height:250px;"  src="{{asset('storage/' . $produto->image2)}}" name="image2" id="image2"> 
                    <input id="image2" class="block mt-1 w-full" type="file" name="image2" >
                </div>

                <div class="mb-3">

                    <img style="width: 250px; height:250px;"  src="{{asset('storage/' . $produto->image3)}}" name="image3" id="image3"> 
                    <input id="image3" class="block mt-1 w-full" type="file" name="image3" >
                </div>




                <div class="mb-3">
                    <label for="marca" class="form-label">Marca</label>
                    <input  type="text" class="form-control" value="{{$produto->marca}}" name="marca" id="marca">
                </div>

                <div class="mb-3">
                    <label for="modelo" class="form-label">Modelo</label>
                    <input  type="text" class="form-control" value="{{$produto->modelo}}" name="modelo" id="modelo">
                </div>

            

                <div class="mb-3">
                    <label for="memoria_ram" class="form-label">Memória Ram</label>
                    <input type="text" class="form-control" value="{{$produto->memoria_ram}}" name="memoria_ram" id="memoria_ram">
                </div>



                <div class="mb-3">
                    <label for="armazenamento" class="form-label">Armazenamento</label>
                    <input type="text" class="form-control" value="{{$produto->armazenamento}}" name="armazenamento" id="armazenamento">
                </div>


                <div class="mb-3">
                    <label for="tela" class="form-label">Tela</label>
                    <input type="text" class="form-control" value="{{$produto->tela}}" name="tela" id="tela">
                </div>

        


                <div class="mb-3">
                    <label for="processador" class="form-label">Processador</label>
                    <input type="text" class="form-control" value="{{$produto->processador}}" name="processador" id="processador"> 
                </div>
                <div class="mb-3">
                    <label for="preco" class="form-label">Preço</label>
                    <input type="text" class="form-control" value="{{$produto->preco}}" name="preco" id="preco">
                </div>




                <center>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </center>   
            </form>



            @endsection





