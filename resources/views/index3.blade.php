
@extends ('layout_produto')

@section('titulo', "pagina de administração")



@section ('conteudo')





@if ($mensagem = session('mensagem'))

<div class ="alert  alert-sucess" role="alert">

    {{$mensagem}}
</div>


@endif





<div style="display: flex; margin-top:10px;margin-bottom:10px;">
<h1 > Lista de Produtos</h1>
                              <a style="margin-left:100px;margin-bottom: 20px;" href="{{route('produto.create')}}"><i class="far fa-plus-square"></i> Novo Produto <a/> </div>


<table class="table-bordered table-striped">
    <thead>
        <tr>


            <th scope="col">Códigos</th>
            <th scope="col">Produtos</th>
            <th scope="col"> Status </th> 
            <th scope="col">Opções</th>

        </tr>

    </thead>




    @forelse ($produtos as $produto)
    <tr>
        <th scope="row">{{$produto->id}}</th>
        <th scope="row">{{$produto->nome}}</th>    

        <td>
         {{$produto->status}}
        </td>

        <td>
            <a class="btn btn-primary" href="{{route('produto.edit',$produto->id)}}">Editar</a>

        </td>


    </tr>
    @empty 

    <div style="color: wheat;"> <h1>Produto não encontrado</h1></div>

    @endforelse

</table>



{{$produtos->links()}}


@endsection






