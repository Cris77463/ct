  <head>
        <meta charset="UTF-8">
        <link rel="icon" href="{{asset('images/icon.png')}}" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <title>Minha Loja</title>



    </head>
    <body style="background-color: #00b4d8; color: white;">

<div class="row" style="display:flex; flex-wrap: wrap; margin-left: 0px;">
    @if (isset($lista))
    @foreach ($lista as $produto)

    <div class="col mb-3" style="flex-grow: 0; margin-right: -15px;">
        <div class="card" style="width: 16rem;">
            <a class="buy-img" href="{{route('produto.show', $produto->id)}}">
                <center>
                    <img class="card-img-top" src="{{asset('storage/'. $produto->foto)}}" style="width: 250px; height: 250px; padding-top: 8px;" alt="i5 10th" />
                </center>
            </a>
            <div class="card-body">
                <h6 class="card-title">{{$produto->nome}}</h6>
                <p class="card-link" style="color:blue;"> R$ {{number_format($produto->preco,2,",",".")}}</p>
                <a class="btn btn-black buy-button" href="{{route('adicionar_carrinho', ['idproduto' => $produto->id])}}" id="btn-cart"><i class="fa fa-shopping-cart"></i> Comprar</a>
            </div>
        </div>
    </div>
<div class="container">
            <!---  yield é usado para replicar o conteudo desta página para outras --->

            @yield('Pagamento') 
        </div>
    @endforeach
    @endif
    
       
</div>
    </body>