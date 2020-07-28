<?php 
    $usuario =$_POST['email'];
    $clave =$_POST['pass'];

    //conexion base de datos
    $conexion = mysqli_connect("localhost","root","","usuario");


    $consulta ="SELECT * FROM usuario WHERE correo=? and contrasena =?";

    session_start();
    
    $sql_sesion = $conexion->prepare($consulta);

    $sql_sesion->bind_param('ss',$usuario,$clave);

    $sql_sesion->execute();

    //$resultado = mysqli_query($conexion,$consulta);
    $resultado =$sql_sesion->get_result();


    //$filas=mysqli_num_rows($resultado);
    $filas = $resultado->num_rows;
    echo $filas;
    if($filas > 0)
    {
        echo "Entro al 1er if";
        while($fila=mysqli_fetch_array($resultado))
        {   
            echo "Entro al while";
            if($usuario == $fila['correo'] && $clave == $fila['contrasena'])
            {
                echo "Entro al 2do if";
                $_SESSION['correo']=$fila['correo'];

                /* echo "OK";
                echo $_SESSION['correo']; */

                $conexion->close();

                header("location:peliculas.php");

            }
        }
        //header("location:peliculas.php?usuario=$usuario");
    }
    else
    {
        //echo "El usuario no existe";
        //$fallo = true;
        header("location: index.php?fallo=true");
    }

    /* mysqli_free_result($resultado);
    mysqli_close($conexion); */


?>