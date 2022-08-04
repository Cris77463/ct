<div class="container content" style="padding-top:20px; margin-left: 300px;">

       <b style="color: green;">Compra Concluida com Sucesso</b></p>
        <div>
            <h3 style="padding-top: 15px;"><b>Detalhes da Compra</b></h3>

            <table class="table">

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


     
                    <h4> Aguardando Envio Do Produto </h4>
                </table>
                  <div class="container">
            <div style="padding-top:30px;margin-left: 250px;">

                <form method="get"action="{{route('home')}}">
                    {{ csrf_field () }}

                    <button  data-position="bottom">Tela Inicial</button>

                </form>

            </div>
        </div>


      

    </div>