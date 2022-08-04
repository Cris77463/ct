
<html>
    <head>
        <meta charset="UTF-8">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>


        <title></title>


    </head>
    <body class="btn-secondary">
<form style="
      margin: 0 auto;
      width: 500px;
      height: auto;
      margin-top: 10px;
      color: white;
      padding: 1em;
      border: 1px solid #CCC;
      border-radius: 1em;" action="{{route('endereco.update', $endereco->id)}}" method="post">

    @csrf
    @method('PATCH')
  
    <div class="mb-3">

        <label for="cep" class="form-label">Cep</label>
        <input  type="text" class="form-control" value="{{$endereco->cep}}" name="cep" id="cep">
    </div>
    <div class="mb-3">

        <label for="bairro" class="form-label">Bairro</label>
        <input  type="text" class="form-control" value="{{$endereco->bairro}}" name="bairro" id="bairro">
    </div>
    <div class="mb-3">

        <label for="rua" class="form-label">Rua</label>
        <input  type="text" class="form-control" value="{{$endereco->logradouro}}" name="rua" id="rua">
    </div>

    <div class="mb-3">

        <label for="numero" class="form-label">Numero</label>
        <input  type="text" class="form-control" value="{{$endereco->numero}}" name="numero" id="numero">
    </div>
    <div class="mb-3">

        <label for="cidade" class="form-label">Cidade</label>
        <input  type="text" class="form-control" value="{{$endereco->cidade}}" name="cidade" id="cidade">
    </div>
    <div class="mb-3">

       <div class="mb-3">
                <x-label for="uf">Estado</x-label>

                <select class="block mt-1 w-full" name="uf" required>
                    <option selected>{{$endereco->uf}}</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
    </div>
    <button type="submit" class="btn btn-danger">Salvar</button>
</form>


</body>








