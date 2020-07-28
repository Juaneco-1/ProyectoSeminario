<?php session_start(); ?>
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
                        Peliculas</a></li>
            <li class="nav-item"><a class="nav-link" style="color: #381DBF;    font-size: 2rem" href="alquiladas.php"><strong>Alquiler</strong> </a></li>
            <li class="nav-item"><a class="nav-link" style="color: #381DBF;    font-size: 2rem" href="nosotros.php"><strong>Nosotros</strong></a></li>
            <li class="nav-item"><a class="nav-link" href="index.php">
                    <div class="salir">
                        <img src="./img/exit.png" alt="salir">
                    </div>
                </a></li>
        </ul>
    </div>
</nav>

<body>

    <?php 
        
        
        
        /* if(isset($_GET["usuario"]) && $_GET["usuario"] != "") 
        {
            $usuario=$_GET['usuario'];
            
        }
        else{
            echo "nada de usuario";
        }
        if(isset($_GET['pelicula'])) 
        {
            echo $_GET['pelicula'];
        }
        else{
            echo "nada de pelicula";
        } */

        /* if(isset($_GET['usuario'])) 
        {
            $usuario=$_GET['usuario'];
            echo $usuario;
        }
        else{
            echo "nada de usuario";
        } */

        //echo $usuario;
    
        $conexion = mysqli_connect("localhost","root","","usuario");
        
        $pelicula_id=$_GET['pelicula'];
        $nombre_pelicula=$_GET['nombre'];
        echo $pelicula_id;
        echo $nombre_pelicula;

        $usuario =$_SESSION['correo'];
        echo $_SESSION['correo'];



        $consulta = "INSERT INTO serie_user VALUES ('$usuario','$pelicula_id','$nombre_pelicula')";

        $ejecutar = mysqli_query($conexion,$consulta);

        if(!$ejecutar)
        {
            echo "Error al ingresar esta pelicula, Repetida para este usuario";
            
            
        }
        else{
            
            header("location:peliculas.php?pelicula=true");
        }


        $conexion->close();

    ?>
    

</body>

</html>