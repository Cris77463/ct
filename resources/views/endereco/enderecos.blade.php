
@extends ('layout_inicial')


@section ('conteudo')



@if ($mensagem = session('mensagem'))

<div class ="alert  alert-sucess" role="alert" style="color: white;">

    {{$mensagem}}
</div>


@endif








<a href="{{route('endereco.create')}}"><button type="submit"style="margin-top: 10px; margin-bottom: 10px" class="btn btn-secondary">Novo Endereço</button></a> 





<div class="row"  style=" ">


    @forelse ($enderecos as $endereco)




    <div  class="card mb-3 " style="width: 22rem;margin-left: 28px">
        <div class="card-body">
            <div class="dropdown"style="margin-left: 200px">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Opções
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{route('endereco.edit',$endereco->id)}}"> <button type="submit" class="btn btn-info">editar</button>
                    </a>
                    <a class="dropdown-item"> <form action="{{route('endereco.destroy',$endereco->id)}}"method="post" style="display:inline">
                            @csrf
                            @method ('DELETE')
                            <button type="submit" class="btn btn-danger">excluir</button>
                        </form></a>
                </div>
            </div>

            <h5 class="card-title">Cep: {{$endereco->cep}}</h5>
            <h5 class="card-title">Bairro: {{$endereco->bairro}}</h5>
            <h5 class="card-title">Rua: {{$endereco->logradouro}}</h5>
            <h5 class="card-title">Numero: {{$endereco->numero}}</h5>
            <h5 class="card-title">Cidade: {{$endereco->cidade}}</h5>
            <h5 class="card-title">Uf: {{$endereco->uf}}</h5>
        </div>
    </div>


    @empty 

    @endforelse

</div>

</table>


@endsection






