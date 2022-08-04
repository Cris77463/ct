

@extends ('layout_inicial')





@section ('conteudo')







@if ($mensagem = session('mensagem'))

<div  style="color: 9e49a3;">

    <strong> {{$mensagem}}</strong>
</div>


@endif



@if (Session::has('mensagem-sucesso'))
<div class="card-panel violet">
    <strong>{{ Session::get('mensagem-sucesso') }}</strong>
</div>
@endif

</body>

@php $i = 0;  @endphp
@forelse ($especies as $especie)







<div  class="card mb-3 " style="width: 20.5rem;top: 2px;display: inline-grid; white-space: nowrap;">


    <div class="w3-card-3"> 

        <img style="height: 270px; width: 300px;" src="{{asset('storage/' . $especie->image)}}">

    </div>

    <div class="container">
        <h5 class="card-title" style="height:35px">

            <span class="card-title grey-text text-darken-4 truncate" title="{{$especie->nome}}">{{$especie->nome}}</span>
            <p style="margin-top: 10px;">R$ {{$especie->id}} <a style="margin-left:10px;" class="btn  btn-outline-info" href="{{route('produto.show' , $especie->id)}}">Veja mais informações</a> </p>
    </div>

    <div class="card-body" style="margin-top: 20px;" >

        <div class="container" style="">

           



            <form method="post"action="{{route('favorito.store')}}">
                {{ csrf_field () }}
                <input type="hidden" name="id" value="{{$especie->id }}">

          
                <button class="btn-large col l6 m6 s6 "> Favoritos</button>
                <a style="margin-left:50px; "href="{{route('adicionar',  $especie->id)}}" class="btn btn-outline-info">  
                            <i class="fas fa-heart"></i>Compra Agora</a>
                
            </form>




        </div>



    </div>

</div>




@empty 

<div style="color: black;"> <h1>Produto não encontrado</h1></div>
{{$produtos->links()}}

@endforelse

<div  >{{$produtos->links()}}</div>








@endsection


</body>






























