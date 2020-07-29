<?php
session_start();
$usuario = $_SESSION['correo'];
$nombre = $_SESSION['nombre'];
$grava = trim($usuario); // "MyEmailAddress@example.com"
$grava = strtolower($grava); // "myemailaddress@example.com"
$hash_grava = md5($grava);
$grava1 = 'https://www.gravatar.com/avatar/';
$tamaño = '=100';
$imggrava = $grava1 . $hash_grava . $tamaño;
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            font-family: arial;
        }

        .title {
            color: grey;
            font-size: 18px;
        }

        button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        a {
            text-decoration: none;
            font-size: 22px;
            color: black;
        }

        button:hover,
        a:hover {
            opacity: 0.7;
        }
    </style>
</head>




<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" style="color: #381DBF;    font-size: 2rem" href="nosotros.php"><img src="./img/ini.png" alt=""></a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item"><a class="nav-link" style="color: #381DBF;    font-size: 2rem" href="perfil.php"><strong><?php echo $nombre ?></strong> </a></li>
            <li class="nav-item active"><a class="nav-link" style="color: #381DBF;    font-size: 2rem " href="peliculas.php">

                    Peliculas
                </a></li>
            <li class="nav-item"><a class="nav-link" style="color: #381DBF;    font-size: 2rem" href="alquiladas.php">Alquiler</a></li>
            <li class="nav-item"><a class="nav-link" style="color: #381DBF;    font-size: 2rem" href="nosotros.php">Nosotros</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php">
                    <div class="salir">
                        <img src="./img/exit2.png" alt="salir">
                    </div>
                </a></li>
        </ul>

    </div>
</nav>

<body>

    <h2 style="text-align:center; color: #BB2F4C;">Hola, <?php echo $nombre ?></h2>
    <div class="card">
        <?php echo "<img style='margin: auto;
                    width: 60%;
                    padding: 10px;' 
                    src='$imggrava' alt='tu imagen' style='width:100%'>" ?>
        <?php echo $usuario ?>
        <p class="title">Desarrollador</p>
        <p>UDENAR</p>
        <div style="margin: 24px 0;">
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
        </div>
        <p><button>Ponerse en contacto</button></p>
    </div>

</body>

</html>