











@extends ('layout_inicial')



@section ('conteudo')

<div style="color: black; ">
    @if ($mensagem = session('mensagem'))

    <div class ="alert  alert-sucess" role="alert">

        {{$mensagem}}
    </div>
    @endif
</div>


<form style="
      margin: 0 auto;
      width: 400px;
      margin-top: 30px;
      color: white;
      padding: 1em;
      border: 1px solid #CCC;
      border-radius: 1em;" action="{{route('perfil.update')}}" method="get">

    @csrf


    <div class="mb-3"> 
        <label for="name" class="form-label">Nome:</label>
        <input  type="text" class="form-control" value="{{ auth()->user()->name}}" name="name" id="name">

    </div>

    <div class="mb-3">

        <label for="email" class="form-label">Email</label>
        <input  type="text" class="form-control" value="{{ auth()->user()->email}}" name="email" id="email">
    </div>


    <button type="submit" class="btn btn-primary">Salvar</button>
</form>

@endsection
