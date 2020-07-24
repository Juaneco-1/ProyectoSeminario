<?php 
    $usuario =$_POST['email'];
    $clave =$_POST['pass'];

    //conexion base de datos
    $conexion = mysqli_connect("localhost","root","","usuario");


    $consulta ="SELECT * FROM usuario WHERE correo='$usuario' and contrasena = '$clave'";

    $resultado = mysqli_query($conexion,$consulta);


    $filas=mysqli_num_rows($resultado);

    if($filas > 0)
    {
        header("location:bienvenido.html");
    }
    else
    {
        //echo "El usuario no existe";
        //$fallo = true;
        header("location: index.php?fallo=true");
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);


?>