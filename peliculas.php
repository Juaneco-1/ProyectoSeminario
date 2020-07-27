<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
    <link rel="stylesheet" href="index.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script defer src="js/main.js"></script>
    <script type="text/javascript">
        function actualizar() {
            location.reload(true);
        }
        //Función para actualizar cada 4 segundos(4000 milisegundos)
        setInterval("actualizar()", 200000);
    </script>
    <meta charset="utf-8">
</head>




<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" style="color: #381DBF;    font-size: 2rem" href="#"><img src="./img/ini.png" alt=""></a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item"><a class="nav-link" style="color: #381DBF;    font-size: 2rem" href="perfil.php">Perfil</a></li>
            <li class="nav-item active"><a class="nav-link" style="color: #381DBF;    font-size: 2rem " href="peliculas.php">
                    <strong>
                        Peliculas
                    </strong></a></li>
            <li class="nav-item"><a class="nav-link" style="color: #381DBF;    font-size: 2rem" href="alquiler.php">Alquiler</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php">
                    <div class="salir">
                        <img src="./img/exit.png" alt="salir">
                    </div>
                </a></li>
        </ul>
    </div>
</nav>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-5">
                <div class="card">
                    <div class="card-header text-center modal-content">
                        <h2>Búsqueda</h2>
                    </div>
                    <div class="card-body">
                        <form action='/' id='form'>
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control modal-content" type="text" placeholder="Busca una pelicula" id='movie'>
                                    <input type='submit' class="btn btn-info input-group-append" style="background-color: #381DBF;" value='Buscar'>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row" id='res'>
            <!-- .... cards .... -->
        </div>
    </div>

</body>

</html>