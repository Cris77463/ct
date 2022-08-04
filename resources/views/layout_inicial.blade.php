<html>

    <head>
        <meta charset="UTF-8">


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/menu.css') }}">

        <style>


            .subnav {
                float: left;
                overflow: hidden;
            }

            .subnav .subnavbtn {
                font-size: 16px;
                border: none;
                outline: none;
                color: white;

                background-color: gray;
                font-family: inherit;
                margin: 0;
            }

            .navbar a:hover, .subnav:hover .subnavbtn {
                background-color: gray;
            }

            .subnav-content {
                display: none;
                position: absolute;

                background-color: C921BB;
                width: 10%;
                z-index: 1;
            }

            .subnav-content a {
                float: left;
                color: #000;
                text-decoration: none;
            }

            .subnav-content a:hover {
                background-color: #eee;
                color: black;
            }

            .subnav:hover .subnav-content {
                display: block;
            }


        </style>





        <title>Cris Technology - A sua melhor escolhar!</title>



    </head>

    <body  style=" background-color: e55fd9;">

        <header class="header"style="background-color: 7c3694;" >

            <form class="form-inline" action="{{ route('logout') }}" style="margin-bottom: 0px;" method="post">
                @csrf
                <button class="btn btn-link active form-control " style="color: black; text-decoration: none; font-size: 19.2px"><i class="fa fa-sign-in-alt"></i> Logout</button>
            </form>




          <a href="{{route('/')}}"> <img src="{{asset('images/logo.png')}}" alt="logo" style="height: 150px; width: auto;"></a>









@guest
<li><a href="{{route('login')}}">LOGIN</a></li>
<li><a href="{{route('register')}}">CADASTRO</a></li>
@else
<li><a href="{{route('conta')}}">MINHA CONTA</a></li>
@endguest
<li><a href="{{route('favorito.index')}}">FAVORITOS</a></li>
<li><a style="margin-bottom: 0px;" href="{{route('/')}}">HOME</a></li>




            <div class="subnav">
                <button class="subnavbtn">Categorias <i class="fa fa-caret-down"></i></button>
                <div class="subnav-content" >
                    <div class="container">
                        <a href="{{route('marca1')}}">Acer</a><br>
                        <a href="{{route('marca2')}}">Dell</a><br>
                        <a href="{{route('marca3')}}">Lenovo</a><br>
                        <a href="{{route('marca4')}}">Samsung</a><br>


                    </div>
                </div>
            </div>


            <nav id="nav">

                <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">
                    <span id="hamburger">


                    </span>

                </button>



                <ul id="menu" class="menu">

                    <li>



                    </li>



                    <form classe="display-flex " action="{{route('busca')}}" method="post" >
                @csrf
                <input class="form-control" name="nome" type="text">

                <button class="btn btn-outline-dark " style="margin-left:190px; margin-top: 4px; margin-right:30px;"  type="submit"> <i class="fab fa-searchengin"></i>Busca</button>
            </form>

                    <li style="margin-left:25px;"><a href="{{route('ver_carrinho')}}"><i class="fas fa-cart-plus"></i></a></li>
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


        <div class="container" style="padding-top: 20px;">
            <!---  yield é usado para replicar o conteudo desta página para outras --->

            @yield('conteudo')
        </div>


        <!-- JavaScript (Opcional) -->
        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src="{{asset('js/menu.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<!-- aqui vai ficar o footer-->








    </body>
