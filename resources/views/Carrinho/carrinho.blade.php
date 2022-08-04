



@extends ('layout_inicial')

@section ('conteudo')



@if(isset($cart)&& count ($cart) > 0)



<div class="container" style="color: white; background-color:  rgb(23, 167, 136);">


    <h3>Carrinho De Compras</h3>




    <table class="table" style="color: white;">

        <thead>
            <tr>

                <th>Foto</th>
                <th>Quantidade</th>
                <th >Nome</th>
                <th>Preço</th>
                <th>Ações</th>


            </tr>
        </thead>

        <tbody>
            @php $total = 0; @endphp
            @foreach($cart as $produto)

            <tr>
                <td><img class="card-img-top" style="height: 60px; width: 60px;" src="{{asset('storage/'. $produto[1]->image)}}"></td>

                <td>
                    <div class="center-align">
                        <a href="{{route('excluir_unidade', ['id' => $produto[1]->id])}}" class="col l4 m4 s4" style="text-decoration: none;">
                            <i class="fas fa-minus-circle" style="color: white !important;"></i>
                        </a>

                        <span class="col l4 m4 s4"> {{$produto[0]}} </span>


                        <a href="{{route('adicionar_unidade', ['id' => $produto[1]->id])}}" class="col l4 m4 s4" style="text-decoration: none;">
                            <i class="fas fa-plus-circle" style="color: white !important;"></i>
                        </a>
                    </div>

                </td> 
                <td>{{$produto[1]->nome}}</td>
                <td>
                    R$ {{number_format($produto[1]->preco * $produto[0],2,",",".")}}
                </td>

                <td><a href="{{route('carrinho_excluir', ['id' => $produto[1]->id])}}" class="btn btn-red" style="color: red; font-family: arial;">
                        <i class="fas fa-trash " style="color: red;"></i>
                    </a></td>


            </tr>


            @php $total += ($produto[1]->preco * $produto[0]); @endphp

            @endforeach
        </tbody>

     

    </table>

    <div >
        <tr>
            <td colspan="5" class="total">
                <b>Total:</b> R$ {{number_format($total,2,",",".")}}
            </td>
        </tr>
    </div>

    <div class="row">
        <center>

    <form  style="width:200px;" method="post" action="{{ route('/') }}">
        {{ csrf_field() }}
        <div class="row">
            <button type="submit" class="btn btn-primary">
             Ver Mais Ofertas
            </button>   </div>

    </form>

     
    <form  style="width:200px;" method="post" action="{{ route('finalizar') }}">
        {{ csrf_field() }}
        <div class="row">
            <button type="submit" class="btn btn-primary">
             Concluir sua Compra
            </button>   </div>

            </form>
   
        </center>
@else <center style="color: blue;" >

    <div class="container">
        <h3>Nenhum item no carrinho </h3>
                </div>
</center>




                @endif
</div>
</div>

@endsection