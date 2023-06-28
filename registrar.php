<?php
include("con_db.php");

if (isset($_POST['tipo_documento']) && isset($_POST['numero_documento']) && isset($_POST['nombres']) && isset($_POST['apellidos']) && isset($_POST['telefono']) && isset($_POST['especialidad']) && isset($_POST['genero']) && isset($_POST['fecha_hora'])) {
    $tipo_documento = $_POST['tipo_documento'];
    $numero_documento = $_POST['numero_documento'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $especialidad = $_POST['especialidad'];
    $genero = $_POST['genero'];
    $fecha_hora = $_POST['fecha_hora'];
    $fechareg = date("Y-m-d H:i:s");

    // Agregar aquí el código para verificar la disponibilidad de la fecha y hora seleccionadas

    $consulta = "INSERT INTO citas (tipo_documento, numero_documento, nombres, apellidos, telefono, especialidad, genero, fecha_hora, fecha_registro) VALUES ('$tipo_documento', '$numero_documento', '$nombres', '$apellidos', '$telefono', '$especialidad', '$genero', '$fecha_hora', '$fechareg')";
    $resultado = mysqli_query($conex, $consulta);

    if ($resultado) {
        echo "<h3 class='ok'>¡Se ha reservado la cita correctamente!</h3>";
    } else {
        echo "<h3 class='bad'>¡Ups, ha ocurrido un error al reservar la cita!</h3>";
    }
} else {
    echo "<h3 class='bad'>¡Por favor, complete todos los campos del formulario!</h3>";
}
?>
