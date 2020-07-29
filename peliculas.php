<?php session_start();
$usuario = $_SESSION['nombre'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="Shortcut Icon" href="img/bamo1.png" type="image/png" />
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
            <a class="navbar-brand" style="color: #381DBF;    font-size: 2rem" href="nosotros.php"><img src="./img/ini.png" alt=""></a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item"><a class="nav-link" style="color: #381DBF;    font-size: 2rem" href="perfil.php"><?php echo $usuario?></a></li>
            <li class="nav-item active"><a class="nav-link" style="color: #381DBF;    font-size: 2rem " href="peliculas.php">
                    <strong>
                        Peliculas
                    </strong></a></li>
            <li class="nav-item"><a class="nav-link" style="color: #381DBF;    font-size: 2rem" href="alquiladas.php">Alquiler</a></li>
            <li class="nav-item"><a class="nav-link" style="color: #381DBF;    font-size: 2rem" href="nosotros.php">Nosotros</a></li>
            <li class="nav-item"><a class="nav-link" href="cerrar_sesion.php">
                    <div class="salir">
                        <img src="./img/exit2.png" alt="salir">
                    </div>
                </a></li>
        </ul>
    </div>
</nav>

<body>
    <div class="container">
        <?php 
        echo "<h3 style='color: #BB2F4C;'>Bienvenido <br>$usuario busca la pelicula que quieras alquilar!</h3>" ?>
        <div class="row">
            <div class="col-md-12 my-5">
                <div class="card">
                    <div class="card-header text-center modal-content rounded-top">
                        <h2>Búsqueda</h2>
                    </div>
                    <div class="card-body border-dark">
                        <form action='/' id='form'>
                            <?php
                            $usuario;
                            if (isset($_GET["pelicula"]) && $_GET["pelicula"] == 'true') {
                                echo "<script> alert('Alquilada con exito');</script>";
                            }

                            ?>
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