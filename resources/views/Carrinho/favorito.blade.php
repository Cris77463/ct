@extends ('layout_inicial')

@section ('conteudo')
<div class="container" style="background-color: rgb(23, 167, 136);">

<div style=" display: inline-grid; margin-top:10px;">
    <h5 style="color:white;"> Meus Favoritos </h5>

</div>

@forelse ($favoritos as $favorito)

<h5 style="color:white;" > Criado em: {{ $favorito->created_at->format('d/m/Y H:i') }} </h5>
<table class="table " style="color:white;">
    <thead>
        <tr>
            <th scope="col">Foto</th>
            <th scope="col">Nome</th>
            <th scope="col">Preço</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($favorito->favorito_produtos as $favorito_produto)
        <tr>
            <th scope="row"> <img width="100" height="100" src="{{asset('storage/'. $favorito_produto->produto->image)}}"></th>
            <td>{{ $favorito_produto->produto->nome }}</td>
            <td>R$ {{ number_format($favorito_produto->produto->preco, 2, ',', '.') }}</td>

            <td>
                <form style="color: white" action="{{route('apagar', $favorito_produto->id)}}" method="post">
                    @csrf
                    @method ('DELETE')

                    <button class="btn btn-danger" data-position="bottom" data-delay="50" data-tooltip="0 produto será deletado dos Favoritos"> Deletar</button>
                </form>
                <div class="container" style="background-color: rgb(223, 223, 223);width: 180px;">
                <a href="{{route('adicionar',  $favorito_produto->produto->id)}}" 
                   class="btn btn-outline-info" style="color: black;;"><i class="fas fa-shopping-cart"></i> Compra Agora</a>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>



@empty

<h5>Não há Favoritos</h5>

@endforelse

@endsection