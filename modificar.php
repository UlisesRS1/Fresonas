<?php
session_start();

if (!isset($_SESSION['logged']) || $_SESSION['logged'] !== true) {
    header('Location: login.php');
    exit;
}

if (isset($_POST['submit'])) {
    $nueva_contraseña = $_POST['nueva_contraseña'];

    if (empty($nueva_contraseña)) {
        $mensaje = "El campo de la nueva contraseña es obligatorio.";
    } else {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "fresonas";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        $sql = "UPDATE usuarios SET contraseña=? WHERE email=?";
        $stmt = $conn->prepare($sql);

        if ($stmt === false) {
            $mensaje = "Error en la preparación de la consulta: " . $conn->error;
        } else {
            $stmt->bind_param("ss", $nueva_contraseña, $_SESSION['email']);

            if ($stmt->execute()) {
                $mensaje = "Contraseña actualizada correctamente.";
            } else {
                $mensaje = "Error al actualizar la contraseña: " . $stmt->error;
            }

            $stmt->close();
        }

        $conn->close();
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Contraseña</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos/estilo-register.css">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script></script>
</head>
<body>
<div class="container mt-5">
    <h2>Modificar Contraseña</h2>
    <?php
    if (isset($mensaje)) {
        echo "<div class='alert alert-info' role='alert'>$mensaje</div>";
    }
    ?>
    <form action="" method="post">
        <div class="form-group">
            <label for="nueva_contraseña">Nueva Contraseña:</label>
            <input type="password" class="form-control" id="nueva_contraseña" name="nueva_contraseña" required>
        </div>
        <button type="submit" name="submit" class="btn btn-danger btn-block">Modificar Contraseña</button>
    </form>
    <br>
    <a href="usuario.php" class="btn btn-secondary btn-block">Regresar</a>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
