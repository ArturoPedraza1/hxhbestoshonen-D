<?php
    include "./header.php";
  ?>
  
  <div class="row">
        <div   class="container">
            <div>
                <h1 class="header center">Login de sistema</h1>
                <form   method="POST"  action="logica/loguear.php">
                    <input class="center" type="text" name="no_cuenta" placeholder="Numero de Cuenta" />
                        <br />
                    <input class="center" type="text" name="clave" placeholder="Contraseña" />
                        <br />
                        <div class="row center">
                    <button class="btn-large waves-effect" type="submit">Inicar Sesion</button>
                      </div>
                </form> 
            
            </div>
        </div>

   </div>
   <?php
  include "./footer.php"
?>   