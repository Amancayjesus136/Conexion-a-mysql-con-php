<!DOCTYPE html>
<html>
<head>
  <title>Sistema de Reserva de Citas</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
    body {
      background-color: skyblue;
    }

    .container {
      background-color: #ffffff;
      margin-top: 50px;
      padding: 30px;
      border-radius: 5px;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    }

    h1 {
      color: #007bff;
      margin-bottom: 30px;
      text-align: center;
    }

    label {
      font-weight: bold;
    }

    .form-control {
      border-color: #007bff;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-primary:hover {
      background-color: #0069d9;
      border-color: #0062cc;
    }

    .logo {
      display: flex;
      justify-content: center;
      margin-bottom: 30px;
    }

    .logo img {
      width: 200px;
      height: auto;
    }
  </style>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $("input, select").on("input", function() {
        var $field = $(this);
        if ($field.val() !== "") {
          $field.closest(".form-group").next().show();
        } else {
          $field.closest(".form-group").nextAll().hide();
        }
      });

      $("#fecha_hora").on("input", function() {
        var selectedDateTime = new Date($(this).val());
        var unavailableDateTime = new Date("2023-06-29T15:00");

        if (selectedDateTime.getTime() === unavailableDateTime.getTime()) {
          alert("La fecha y hora seleccionada no está disponible.");
          $(this).val("");
        }
      });
    });
  </script>
</head>
<body>
  <div class="container">
    <div class="logo">
      <img src="img/ceeri-logo.jpg" alt="Logo de la empresa">
    </div>
  <div class="container">
    <h1>Sistema de Reserva de Citas</h1>
    <form action="registrar.php" method="POST">
      <div class="form-group">
        <label for="tipo_documento">Tipo de Documento:</label>
        <select class="form-control" id="tipo_documento" name="tipo_documento" required>
          <option value="">Seleccione</option>
          <option value="DNI">DNI</option>
          <option value="Pasaporte">Pasaporte</option>
        </select>
      </div>
      <div class="form-group">
        <label for="numero_documento">Número de Documento:</label>
        <input type="number" class="form-control" id="numero_documento" name="numero_documento" required>
      </div>
      <div class="form-group">
        <label for="nombres">Nombres:</label>
        <input type="text" class="form-control" id="nombres" name="nombres" required>
      </div>
      <div class="form-group">
        <label for="apellidos">Apellidos:</label>
        <input type="text" class="form-control" id="apellidos" name="apellidos" required>
      </div>
      <div class="form-group">
        <label for="telefono">Teléfono:</label>
        <input type="number" class="form-control" id="telefono" name="telefono" required>
      </div>
      <div class="form-group">
        <label for="especialidad">Especialidad:</label>
        <input type="text" class="form-control" id="especialidad" name="especialidad" required>
      </div>
      <div class="form-group">
        <label for="genero">Género:</label>
        <select class="form-control" id="genero" name="genero" required>
          <option value="">Seleccione</option>
          <option value="Masculino">Masculino</option>
          <option value="Femenino">Femenino</option>
          <option value="Otro">Otro</option>
        </select>
      </div>
      <div class="form-group">
        <label for="fecha_hora">Fecha y Hora:</label>
        <input type="datetime-local" class="form-control" id="fecha_hora" name="fecha_hora" required>
      </div>
      <button type="submit" class="btn btn-primary">Reservar Cita</button>
    </form>
  </div>
</body>
</html>
