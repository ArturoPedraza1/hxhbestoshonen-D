<?php
    include "./header.php";
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 style=" text-align: center;" >Elimina Usuario</h1>
    <form style=" text-align: center;" method="POST" action="./logica/deleteUsuario.php">

        <input class="center" type="text" name="no_cuenta" placeholder="Numero de Cuenta" />
        <br />
        <div class="row center">
                    <button class="btn-large waves-effect" type="submit" name="submit" >Eliminar usuario</button>
                 </div>

    </form>
    
    <h1><a href="Principal.php">Inicio de listas</a></h1>

</body>

</html>
<?php
  include "./footer.php"
?>  