@extends ('_produto')





@section ('Pagamento')







<div class="container content" style="padding-top:20px; margin-left: 400px;background-color: rgb(23, 167, 136);width: 500px;height:400px;margin-top:25px;">

        <div>
            <h3><b>Endereço</b></h3>
            @if (isset($enderecos) && count($enderecos) > 0)
            <p style="font-size: 16px;"><b>Selecione o <b >endereço</b> que deseja receber o envio do pedido.</b></p>

            <div class="end-flex">
                <table>
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
                        @foreach($enderecos as $endereco)
                        <form action="{{route('confirmacao')}}" method="post">
                            @csrf
                            <div class="form-check">
                                <label>
                                    <tr>
                                        <td><input type="radio" name="endereco" value="{{$endereco->id}}" class="form-check-input" id="" required></td>
                                        <td data-title="Cep">{{$endereco->cep}}</td>
                                        <td data-title="Rua">{{$endereco->logradouro}}</td>
                                        <td data-title="Número">{{$endereco->numero}}</td>
                                        <td data-title="Bairro">{{$endereco->bairro}}</td>
                                        <td data-title="Cidade">{{$endereco->cidade}}</td>
                                        <td data-title="Estado">{{$endereco->uf}}</td>
                                    </tr>
                                </label>
                            </div>
                            @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <p style="color: greenyellow; margin-bottom: 0px;"><b>Você não possui um endereço cadastrado!</b></p>
            <p style="font-size: 16px; margin-bottom: 0px;"><b style="color: greenyellow;"><a class="a-end" href="{{route('endereco.create')}}">Clique aqui</a></b><b> para cadastrar um novo endereço.</b></p>
            @endif
        </div>

        <div class="pagamento">
            <h3 style="padding-top: 30px;"><b>Forma de pagamento</b></h3>
            <p style="font-size: 16px;"><b>Selecione a forma de pagamento  que deseja utilizar no pedido.</b></p>
            <input type="hidden" name="envio">
            @foreach ( $pagamentos as $pagamento )
            <label>
                <div class="form-check">
<!--                    <input type="radio" name="pagamento" value="{{$pagamento->id}}" class="form-check-input" id="" required>
                   <label>{{$pagamento->cartao_credito}}</label>-->
                    
                    <input type="radio" name="pagamento" value="{{$pagamento->id}}" class="form-check-input" id="" required>
                     <label>{{$pagamento->pix}}</label><br>
                      <input type="radio" name="pagamento" value="{{$pagamento->id}}" class="form-check-input" id="" required>
                    <label>{{$pagamento->cartao_Credito}}</label> <br>
                     <input type="radio" name="pagamento" value="{{$pagamento->id}}" class="form-check-input" id="" required>
                     <label>{{$pagamento->boleto}}</label>
                   
                    
                     
                     
                </div> <br>

                @endforeach
                
            </label>
            <form  style="width:200px;" method="post" action="{{ route('finalizar') }}">
        {{ csrf_field() }}
       

            <button class="btn btn-primary " style="color:white;" type="submit">Finalizar pedido</button>
        </div>
        </form>
    </div>

    
