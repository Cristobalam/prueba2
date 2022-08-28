<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Evaluación 2</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> --}}
    <style>
        a { 
            color: white;
            text-decoration: none;
        }

        p { 
            color: white;
            text-decoration: none;
            line-height: 12pt;
        }  

        h5 {
            color: white;
        }
    </style>
  </head>
  <body>
    <!-- header -->
    @section('header')
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container" style="margin-left:10%">
                <a class="navbar-brand" href="/">Software Gestión de Stock</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>           
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="/productos">Productos</a>
                    </li>
                    
                </ul>
                </div>
            </div>
        </nav>
        <div class="container mt-3 h1">
            @yield('title')
        </div>
    @show
    <!-- body -->
        <div class="container">
            @yield('content')
        </div>
    <!-- footer -->
    @section('footer')
        <div class="container-fluid p-3 my-3 bg-dark col-12">
            <div class="row">
                <div class="col-4" style="padding-left:10%"><img src="https://ciisa.cl/wp-content/uploads/2018/01/Logo-Ciisa-Sitio.png" alt="ciisa"></div>
                <div class="col-4" style="padding-left:10%">
                    <h5>Integrantes</h5>
                    <p>Armin Burkart</p>
                    <p>Carlos Molina</p>
                    <p>Cristóbal Araos</p>
                </div>
                <div class="col-4" style="padding-left:10%">
                    <h5>Links</h5>
                    <p><a href="https://github.com/Cristobalam/prueba2" target="_blank">GitHub</a></p>
                    <p> <a href="https://www.youtube.com/watch?v=wbAf63uHT6I" target="_blank">Video</a></p>
                </div>
            </div>
        </div>
    @show
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>