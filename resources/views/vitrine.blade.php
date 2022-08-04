<head>
    
    <link rel="shortcut icon" href="{{ asset('images/icon.ico') }}">
   
</head>
@extends ('layout_inicial')

@section ('conteudo')


<body >




@if ($mensagem = session('mensagem'))

<div  style="color: green;">

    <strong> {{$mensagem}}</strong>
</div>


@endif



@if (Session::has('mensagem-sucesso'))
<div class="card-panel green">
    <strong>{{ Session::get('mensagem-sucesso') }}</strong>
</div>
@endif




@forelse ($produtos as $produto)


<div  class="card mb-3 " style="width: 20.3rem;margin-top: 1px;display: inline-grid; white-space: nowrap;height: 405px; margin-left: 18px;">


    <div class="w3-card-3"> 

        <img style="height: 270px; width: 300px; margin-top: 5px;margin-left: 10px;" src="{{asset('storage/' . $produto->image)}}">

    </div>

    <div class="container">
        <h5 class="card-title" style="height:35px;">

            <p  class="card-title grey-text " title="{{$produto->nome}}">{{$produto->nome}}</p>
            <p style="margin-top: 10px;">R$ {{$produto->preco}} 
            <a style="margin-left:10px;" class="btn  btn-outline-info" href="{{route('produto.show' , $produto->id)}}">Detalhes</a> </p>
    </div>

    <div class="card-body" style="margin-top: 18px;" >

        <div class="container" >

           



            <form method="post"action="{{route('favorito.store')}}">
                {{ csrf_field () }}
                <input type="hidden" name="id" value="{{ $produto->id }}">

                <button class="btn-large col l6 m6 s6 "> <i class="fas fa-heart"></i></button>
                <a style="margin-left:10px; "href="{{route('adicionar',  $produto->id)}}" class="btn btn-outline-info"><i class="fas fa-cart-plus"></i>Compra Agora</a>
                
            </form>




        </div>



    </div>

</div>






@empty 

<div style="color: Black;"> <h1>Produto não encontrado</h1></div>


@endforelse



{{$produtos->links()}}





@endsection



</body>