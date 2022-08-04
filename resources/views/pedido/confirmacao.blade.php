
  <head>
        <meta charset="UTF-8">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <title>Minha Loja</title>



    </head>
    <body style="background-color: #00b4d8;">


<div class="container content" style="padding-top:20px; margin-left: 270px; background-color: rgb(23, 167, 136);width: 800px;height:600px;margin-top:5px;color: white;">

        <h1><b>Confirme sua compra</b></h1>
        <p style="font-size: 16px;"><b>Verifique as informação antes de confirmar a compra.</b></p>
        <div>
            <h3 style="padding-top: 15px;"><b>Detalhes do carrinho</b></h3>

            
              <div>
            <h3><b>Endereço</b></h3>
            <div class="display-flex " >
                <table style="color: white;">
                    <thead>
                        <tr>
                            <th> </th>
                            <th>Cep</th>
                            <th>Rua</th>
                            <th>Número</th>
                            <th>Bairro</th>
                            <th>Cidade</th>
                            <th>Estado</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($enderecos as $end)


                        <tr style="color: white;">
                            <td><a class="a-end" href="{{route('finalizar')}}"></td>
                            <td data-title="Cep">{{$end->cep}}</td>
                            <td data-title="Rua">{{$end->logradouro}}</td>
                            <td data-title="Número">{{$end->numero}}</td>
                            <td data-title="Bairro">{{$end->bairro}}</td> 
                            <td data-title="Cidade">{{$end->cidade}}</td>
                            <td data-title="Estado">{{$end->uf}}</td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>

            <table class="table" style="width: 650px;color: white;">

                <thead>
                    <tr>

                        <th></th>
                        <th style="width: 415px;">Produto</th>
                        <th>Preço</th>
                        <th style="padding-left:35px;">Quantidade</th>
                        <th>Subtotal</th>
                        <th></th>


                    </tr>
                </thead>

                <tbody>
                    @php $total = 0; @endphp
                    @foreach ($carts as $cart)

                    <tr>
                        <td>
                            <img class="card-img-top" style="height: 60px; width: 60px;" src="{{asset('storage/'. $cart[1]->image)}}">
                        </td>

                        <td data-title="Nome">
                            {{$cart[1]->nome}}
                        </td>

                        <td data-title="Preço">
                            R$ {{number_format($cart[1]->preco,2,",",".")}}
                        </td>

                        <td data-title="Quantidade" style="padding-left: 4.5rem;">
                            {{$cart[0]}}
                        </td>

                        <td data-title="Subtotal">
                            R$ {{number_format($cart[1]->preco * $cart[0],2,",",".")}}
                        </td>

                    </tr>
                    @php $total += ($cart[1]->preco * $cart[0]); @endphp
                    @endforeach
                </tbody>

                <tfooter>
                    <b>
                        <tr></tr>
                    </b>
                </tfooter>

            </table>

            <div class="tfooter">
                <tr>
                    <td colspan="5" class="total">
                        <b>Total:</b> R$ {{number_format($total,2,",",".")}}
                    </td>
                </tr>
            </div>

        </div>


      

        <div style="padding-top: 40px;">
            <h3><b>Forma de pagamento</b></h3>
            <a class="a-end" href="{{route('finalizar')}}" style="margin-left: 10px;"><i class="fas fa-sync-alt"></i></a>
            @foreach ($pagamentos as $pagamento)
       
            <h5 style="display: inline; margin-left: 2px;"><b>{{$pagamento->pix}}</b></h5>
            
            
            @endforeach
        </div>

        <form method="post" action="{{route('pedido')}}">
            @csrf
            <input class="btn  btn-primary " style="color:white;margin-top: 25px; margin-left: 400px;" type="submit" value="Confirmar compra" >
        </form>

    </div>
    </body>