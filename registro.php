<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="Shortcut Icon" href="img/bamo1.png" type="image/png" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-7">
                <h1 class="display-4">Formulario</h1>
                <hr class="bg-info">
                <p>Por favor permítenos conocerte un poco más</p>
                <p class="small text text-danger pt-0">*Todos los campos son requeridos</p>
                <form action="guardar.php" method="POST">
                    <div class="row form-group">
                        <label for="nombre" class="col-form-label col-md-4">Nombre</label>
                        <div class="col-md-8">
                            <input type="text" name="nombre" id="nombre" class="form-control">
                        </div>

                    </div>

                    <div class="row form-group">
                        <label for="email" class="col-form-label col-md-4">E-mail</label>
                        <div class="col-md-8">
                            <input type="email" name="email" id="email" class="form-control">
                        </div>

                    </div>

                    <div class="row form-group">
                        <label for="contrasena" class="col-form-label col-md-4">Contrasena</label>
                        <div class="col-md-8">
                            <input type="password" name="contrasena" id="contrasena" class="form-control">
                        </div>

                    </div>

                    <input type="submit" class="btn btn-info"></input>

                    <?php

                    if (isset($_GET["fallo"]) && $_GET["fallo"] == 'true') {
                        echo "<script> alert ('El E-mail ya está registrado') </script>";
                    }

                    ?>

                    <a href="./index.php" class="btn btn-danger ml-5">Volver</a>
                </form>


            </div>

        </div>
    </div>

</body>

</html>