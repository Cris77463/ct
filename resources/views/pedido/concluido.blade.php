
<head>
    <meta charset="UTF-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <title>Minha Loja</title>



</head>
<body style="background-color: #00b4d8;">


    <div class="container content" style="padding-top:20px; margin-left: 200px;width: 800px; color: white;">

        <b style="color: green; display: flex;">Compra Concluida com Sucesso  <form style="margin-left:150px;" method="get"action="{{route('/')}}">
                {{ csrf_field () }}

                <button class="btn-success" style="color:white" >Home</button>

            </form>
        </b>  
        <div>
            <h3 style="padding-top: 15px;"><b>Detalhes da Compra</b></h3>

            <table class="table" style="color: white;">

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



        <h5> Aguardando Envio Do Produto </h5>
        
        
        
        
    </table>
    <div class="container">
        <div style="padding-top:30px;margin-left: 250px;">


        </div>
    </div>




</div>
</body>