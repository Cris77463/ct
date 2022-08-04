@extends ('layout_inicial')





@section ('conteudo')

<div class="col-02">
    
    <h2>Cadastras Clientes</h2>
    
</div>



            <form action="{{route('cadastrar_cliente')}}" method="post">
                @csrf
                
                <div class="row">
                
                    <div class="col-4">
                        <div class="form-group">
                   
                    Nome: <input type="text"  name="nome"  class="form-control" />
                </div>
                    </div>
                     
                    
                    <div class="col-4">
                        <div class="form-group">
                   
                    Email: <input type="text"  name="email"  class="form-control" />
                </div>
                    </div>
                    
                    
                  <div class="col-4">
                        <div class="form-group">
                
                    Cpf: <input type="text"  name="cpf"  class="form-control" />
                </div>
                    </div>
              
             </div>
                
                   <div class="row">
              
                   
                     <div class="col-3">
                        <div class="form-group">
                   
                    Cep: <input type="text"  name="cep"  class="form-control" />
                </div>
                    </div>
                    
                    <div class="col-3">
                        <div class="form-group">
                   
                    Bairro: <input type="text"  name="bairro"  class="form-control" />
                </div>
                    </div>
                       
               
                       
                       <div class="row">
                       
                    <div class="col-12">
                        <div class="form-group">
                   
                    Logradouro: <input type="text"  name="logradouro"  class="form-control" />
                       </div>
                    </div>
                       </div>
                            <div class="col-3">
                        <div class="form-group">
                   
                    Rua: <input type="text"  name="rua"  class="form-control" />
                </div>
                    </div>
                   </div>
                
                   <div class="row">
                  
                    
                      <div class="col-2">
                        <div class="form-group">
                   
                    Número: <input type="text"  name="numero"  class="form-control" />
                </div>
                    </div>
                    
                    
                      <div class="col-5">
                        <div class="form-group">
                   
                    Complemento: <input type="text"  name="complemento"  class="form-control" />
                </div>
                    </div>
                      <div class="col-5">
                        <div class="form-group">
                   
                    Cidade: <input type="text"  name="cidade"  class="form-control" />
                </div>
                      </div>
             <div class="row">
           
                    
                    
                  
                        <div class="col-5">
                        <div class="form-group">
                   
                    Estado:<input type="text"  name="estado"  class="form-control" />
                </div>
                            
                            
                        </div>
                          
                          
                         
                            
              <div class="col-5">
                        <div class="form-group">
                   
                    Senha: <input type="text"  name="password"  class="form-control" />
                </div>
                     
              </div>
                          <button type="submit" class="btn btn-group-sm">Salvar</button>   
             </div>
                     
<!--                 <div class="col-2">
                        <div class="form-group">
                   
                    Senha de Confirmação: <input type="text"  name="password_confirmation "  class="form-control" />
                </div> 
                 </div>
                           
                 </div>          -->
                            
                    
                   
        
                   

                
                
                
            </form>





@endsection