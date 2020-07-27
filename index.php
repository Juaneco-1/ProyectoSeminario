<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="index.css">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="modal-dialog text-center">
        <div class="col-sm-8">
            <div class="modal-content">
                <div class="col-12 usuario">
                    <img src="./img/user2.jpeg" alt="Imagen de Usuario">
                </div>
                <form action="validar.php" method="POST" class="col-12" >
                
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="E-mail" required />   
                    </div>
    
                    <div class="form-group">
                        <input type="password" class="form-control" name="pass" placeholder="Contraseña" required />   
                    </div>
                                        
                    <input type="submit" value="Entrar" class="btn btn-success"/>

                    <?php 
                    
                      if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true')
                      {
                        
                        echo "<div style='color:red' >Usuario o contraseña invalido </div>";
                      }
                    
                    ?>
                  </form>

                  <a href="./registro.php" style="color:black">Registrarse</a>
            </div>
            
            </div>
          </body>
        </div>
      
</html>
