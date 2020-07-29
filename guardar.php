<?php
    
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db ="usuario";

    $con = mysqli_connect($host,$user,$pass,$db) or die("Problema de conexion");
    mysqli_select_db($con,$db) or ("Problema con la base de datos");
    $nombre=$_POST['nombre'];
    $correo=$_POST['email'];
    $contrasena=$_POST['contrasena'];

    $sql ="INSERT INTO usuario VALUES ('$nombre','$correo','$contrasena')";
    $ejecutar = mysqli_query($con,$sql);

    
    

    if(!$ejecutar)
    {
        header("location:registro.php?fallo=true");
                
    }
    else{
        echo "Registro exitoso!! <br> <a href = 'index.php'> Volver </a>";
    }





?>
