
<html>
    <head>
        <meta charset="UTF-8">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/> 
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!--Importando Script Jquery-->
     

        <title>Endereços</title>
    </head>
    
    
    
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 <body style="background-color: CF55ED;">
        <form style="
              margin: 0 auto;
              width: 400px;
              margin-top: 10px;
              color: black;
              padding: 1em;
              border: 1px solid #CCC;
              border-radius: 1em;" action="{{route('endereco.store')}}" method="Post">

            @csrf

          

            <div class="mb-3">
             
                 <input  type="hidden" class="form-control" name="user_id" value="{{Auth::user()->id}}">
                
                <label for="cep" class="form-label">Cep</label>
                <input  type="text" class="form-control"name="cep" id="cep" required/>
            </div>
            
            
            <div class="mb-3">

                <label for="bairro" class="form-label">Bairro</label>
                <input  type="text" class="form-control" name="bairro" id="bairro"required/>
            </div>
           
            <div class="mb-3">

                <label for="logradouro" class="form-label">Rua</label>
                <input  type="text" class="form-control" name="logradouro" id="logradouro"required/>
            </div>
           
          
                <div class="mb-3">
                <label for="numero" class="form-label">Numero</label>
                <input  type="text" class="form-control"name="numero" id="numero">
               </div>
          
             <div class="mb-3">

                <label for="complemento" class="form-label">Complemento</label>
                <input  type="text" class="form-control"  name="complemento" id="complemento"required/>
            </div>

           

             <div class="mb-3">
                <label for="cidade" class="form-label">Cidade</label>
                <input  type="text" class="form-control"  name="cidade" id="cidade"required/>
            </div>
            <div class="mb-3">

                <label for="uf" class="form-label">Estado</label>
                 <input  type="text" class="form-control"  name="uf" id="uf"required/>
                
            </div>
            <button style="margin-left: 290px;" type="submit" class="btn btn-danger">Salvar</button>
        </form>
   
        
        <script type="text/javascript">
		$("#cep").focusout(function(){
			//Início do Comando AJAX
			$.ajax({
				//O campo URL diz o caminho de onde virá os dados
				//É importante concatenar o valor digitado no CEP
				url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
				//Aqui você deve preencher o tipo de dados que será lido,
				//no caso, estamos lendo JSON.
				dataType: 'json',
				//SUCESS é referente a função que será executada caso
				//ele consiga ler a fonte de dados com sucesso.
				//O parâmetro dentro da função se refere ao nome da variável
				//que você vai dar para ler esse objeto.
				success: function(resposta){
					//Agora basta definir os valores que você deseja preencher
					//automaticamente nos campos acima.
					$("#logradouro").val(resposta.logradouro);
					$("#complemento").val(resposta.complemento);
					$("#bairro").val(resposta.bairro);
					$("#cidade").val(resposta.localidade);
					$("#uf").val(resposta.uf);
					//Vamos incluir para que o Número seja focado automaticamente
					//melhorando a experiência do usuário
					$("#numero").focus();
				}
			});
		});
	</script>


    </body>








