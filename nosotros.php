<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="Shortcut Icon" href="img/bamo1.png" type="image/png" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
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
                    Peliculas</a></li>
            <li class="nav-item"><a class="nav-link" style="color: #381DBF;    font-size: 2rem" href="alquiler.php">Alquiler </a></li>

            <li class="nav-item"><a class="nav-link" style="color: #381DBF;    font-size: 2rem" href="nosotros.php"><strong>Nosotros</strong></a></li>
            <li class="nav-item"><a class="nav-link" href="index.php">
                    <div class="salir">
                        <img src="./img/exit2.png" alt="salir">
                    </div>
                </a></li>
        </ul>
    </div>
</nav>

<body>
    <div class="container">
        <div class="card-deck">
            <div class="card">
                <img src="./img/sergio.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sergio Gómez Duque
                    </h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 1 week ago</small></p>
                </div>
            </div>
            <div class="card">
                <img src="./img/jose.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Juan Jose Burbano</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 1 week ago</small></p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Nuestra empresa</h5>
                    <img src="./img/somebari.gif" class="card-img-top" alt="">
                    <p class="card-text">Somos skereeee</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
        </div>
    </div>

</body>

</html>