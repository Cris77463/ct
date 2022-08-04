<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">



    </head>
    <body style="background-color: #00b4d8;">


        <form  style="margin-top: 10px;margin-left: 100px;"method="get"action="{{route('/')}}">
            {{ csrf_field () }}

            <button class="btn btn-primary" data-position="bottom">Volta</button>

        </form>
        <div style="padding-top:10px;">



            <div class="container" style="display:flex;">

                <div class="container" style="width: 1700px;">

                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img  style="height: 500px; width: 1700px;" src="{{asset('storage/' . $produto->image)}}"/>
                            </div>

                            <div class="item">
                                <img style="height: 500px; width: 1700px;" src="{{asset('storage/' . $produto->image2)}}"/>
                            </div>

                            <div class="item">
                                <img style="height: 500px; width: 1700px;" src="{{asset('storage/' . $produto->image3)}}"/>
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        
                      
                        
                    </div>
                </div>
                <div class="container" style="color: white;">
                    <p class="card-text">Nome:<br>{{$produto->nome}}</p>
                    <p class="card-text">Descrição:<br>{{$produto->descricao}}</p>
                    <p class="card-text">Marca: {{$produto->marca}} </p>
                    <p class="card-text">Modelo: {{$produto->modelo}} </p>
                    <p class="card-text">Memória Ram: {{$produto->memoria_ram}} </p>
                    <p class="card-text">Armazenamento: {{$produto->armazenamento}} </p>
                    <p class="card-text">Tela: {{$produto->tela}} Polegadas</p>
                    <p class="card-text">Processador: {{$produto->processador}} </p>
                </div>
                </div>
            </div>











    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>




</html>




