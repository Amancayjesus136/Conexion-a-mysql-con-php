<?php
$conex = mysqli_connect("localhost","root","","registro");
if (mysqli_connect_errno()) {
    echo "Error al conectar a la base de datos: " . mysqli_connect_error();
    exit();
}
?>
