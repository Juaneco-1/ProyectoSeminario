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
    <table class="table table-hover table-dark">

    
        
        <thead>
            <tr>
                <td>
                    ID-PELICULA
                </td>

                <td> NOMBRE-PELICULA</td>
            </tr>
        </thead>
        <?php 
            
            
            
            $usuario=$_SESSION['correo'];
            //echo $usuario;

            $conexion = mysqli_connect("localhost","root","","usuario");

            $consulta ="SELECT * FROM serie_user WHERE usuario='$usuario'";

            

            $ejecutar = mysqli_query($conexion,$consulta);
            

            if(!$ejecutar)
            {
                echo "No se hallo al usuario en la BD";
                
                
            }
            else{
                
                while($rs=mysqli_fetch_array($ejecutar))
                {
                    echo "<tr>"
                    ."<td>".$rs['id_movie']."</td>"
                    ."<td>".$rs['nombre']."</td>"
                    ."</tr>";
                }
            }


            $conexion->close();



        




    ?>
    
    </table>
    </div>
</body>

</html>