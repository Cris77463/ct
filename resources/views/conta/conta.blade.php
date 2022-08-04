


@extends ('layout_inicial')



@section ('conteudo')

    <div style="color: #cacaca; ">
    @if ($mensagem = session('mensagem'))

    <div class ="alert  alert-sucess" role="alert">

        {{$mensagem}}
    </div>
    @endif
 </div>

    <div  class="card mb-3 " style="width: 22rem;margin-left: 10px">
        <div class="card-body">
           
           
            <h5 class="card-title"><a style="margin: 30px; color: blueviolet;" href="{{route('perfil')}}"><h5>Dados Pessoais</h5><a/></h5>
            <h5 class="card-title"> <a style="margin: 50px; color: blueviolet;" href="{{route('endereco.index')}}"><h5>Endereços</h5><a/></h5>
         
        </div>
    </div>

 


   
 

@endsection
