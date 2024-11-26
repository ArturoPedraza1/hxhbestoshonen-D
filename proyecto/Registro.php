<?php
    include "./header.php";
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" >
    <title>Document</title>
</head>
<body>

    <header  >
        <h3 class="header center"> Registro</h3>
    </header>
    
    <div>
        <form action="./logica/enviarRegistro.php" method="post">
        <!-- <form action="./tempo.php" method="get"> -->
            <hr>
            <div>
                <label class="center" for="nombre_usuario">Ingresa nombre usuario:</label>
                <input class="center" type="text" name="nombre_usuario" required maxlength="100" placeholder="Ingresa tu Nombre">
                <br><br>
                <label for="carrera">Carrera:</label>
                <input class="center" type="text" name="carrera" required maxlength="100" placeholder="Ingresa tu carrera">
                <br><br>
                <label for="email">Correo:</label>
                <input class="center" type="text" name="email" required maxlength="100" placeholder="Ingresa tu correo">
                <br><br>
                <label for="no_cuenta">Numero de cuenta:</label>
                <input class="center" type="text" name="no_cuenta" required maxlength="100" placeholder="Ingresa tu numero de cuenta">
                <br><br>
                <label for="direccion">Direccion particular:</label>
                <input class="center" type="text" name="direccion" required maxlength="100" placeholder="Ingresa tu direccion particular">
                <br><br>
                <label for="telefono">Telefono:</label>
                <input class="center" type="text" name="telefono" required maxlength="8" placeholder="Ingresa tu telefono">
                <br><br>
                <label for="password">contraseña:</label>
                <input class="center" type="password" name="password" required maxlength="8" placeholder="Ingresa tu contraseña">
                <br><br>
            </div>
            <div class="row center">
                    <button class="btn-large waves-effect" type="submit" name="submit" >Enviar registro</button>
                 </div>
        </form>
    </div>
</body>
</html>

<h1 style=" text-align: center;"> <a href='./Registro.php' >Nuevo registro</a></h1>
<h1 style=" text-align: center;"> <a href='./Principal.php'>Ver registros</a></h1>
<?php
  include "./footer.php"
?>  