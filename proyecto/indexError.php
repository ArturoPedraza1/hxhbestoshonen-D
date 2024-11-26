<?php
    include "./header.php";
  ?>
<h1 class="header center">Ha sucesido un error en el Login</h1>
<div  >
    
        <form method="POST" action="logica/loguear.php">

            <input class="center" type="text" name="no_cuenta" placeholder="Numero de Cuenta" />
            <br />
            <input class="center" type="text" name="clave" placeholder="Contraseña" />
            <br />
            <div class="row center">
                    <button class="btn-large waves-effect" type="submit">Inicar Sesion</button>
                </div>
        </form>
    
</div>
<?php
  include "./footer.php"
?>