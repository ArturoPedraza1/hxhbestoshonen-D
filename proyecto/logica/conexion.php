
<?php
$host_db = "localhost";
$user_db = "root";
$pass_db = "bajoterra14?";
$db_name = "fes_aragon";


$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);

if($conexion->connect_error){
    echo"<h1>MySQL no le  esta dando permisos para ejecutar consultas verificar error</h1>";
}

?>
