<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

       <link rel="shortcut icon" href="{{ asset('images/icon.ico') }}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>


         <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/menu.css') }}">

        <title>Administração</title>
    </head>
    <body>


 <body >

        <header class="header">

            <form class="form-inline" action="{{ route('logout') }}" style="margin-bottom: 0px;" method="post">
                @csrf
                <button class="btn btn-link active form-control " style="color: black; text-decoration: none; font-size: 19.2px"><i class="fa fa-sign-in-alt"></i> Logout</button>
            </form>
        

          <span>PERFIL ADMIN</span> 
        
          
                 <form classe="display-flex " action="{{route('seach')}}" method="post" >
                        @csrf
                        <input class="form-control" name="nome"  type="text">
                
                        <button class="btn btn-outline-dark " style="margin-left:190px; margin-top: 4px;"type="submit"> <i class="fas fa-search-location"></i></button>
                    </form> 
        
           


            <nav id="nav">

              


                <ul id="menu" class="menu">

                
                  
                    @guest
                    <li><a href="{{route('login')}}">LOGIN</a></li>
                    <li><a href="{{route('register')}}">CADASTRO</a></li>
                    @else
                    
                    @endguest
                   
                </ul>



            </nav>

            



        </header>


        <script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
        </script>

  
      
        <div class="container">


            @yield('conteudo')
        </div>
        
        
        
        <!-- JavaScript (Opcional) -->
        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="{{asset('js/menu.js')}}"></script>

        
 </body>









</html>