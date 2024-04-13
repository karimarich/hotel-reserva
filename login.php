    
<?php
$title='login';
require_once 'db/conn.php';
require_once 'includes/header.php';
session_start();

?>

        <h2 class="text-center">iniciar sesión</h2>
        <h6 class="text-center">administrador</h6> 
        

  <div class="row align-items-center " style="margin-top: 3rem;">
    <div class="col">
     
    </div>
    <div  class="col text-black border" style="padding: 1rem;">
        <form action="listado.php" name="login" method="post">
          <div class="mb-3">
            <label for="Usuario" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="Usuario" name="usuario" placeholder="inserta usuario">
          </div>
          <div class="mb-3">
            <label for="pwd" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="pwd" name="contrasena" placeholder="********">
          </div>
            <button type="submit" class="btn btn-outline-warning">iniciar</button>
        </form>
    </div>
    <div class="col">
      
    </div>
  </div>



  <?php require_once 'includes/footer.php' ?>