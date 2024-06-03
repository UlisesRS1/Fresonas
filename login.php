<?php
session_start();

// Verificar si se envió el formulario de inicio de sesión
if (isset($_POST['submit'])) {
    // Datos de conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";  // Debe ser la contraseña de tu base de datos
    $dbname = "fresonas";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Obtener los datos del formulario
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];

    // Asegurarse de que los campos no estén vacíos
    if (empty($email) || empty($contraseña)) {
        $error_login = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        Todos los campos son obligatorios.
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                      </div>";
    } else {
        // Preparar y ejecutar la consulta SQL para buscar el usuario
        $sql = "SELECT * FROM usuarios WHERE email=?";
        $stmt = $conn->prepare($sql);

        if ($stmt === false) {
            die("Error en la preparación de la consulta: " . $conn->error);
        }

        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            // Comparar la contraseña sin encriptar
            if ($contraseña === $row['contraseña']) {
                $_SESSION['logged'] = true;
                $_SESSION['email'] = $email;
                $_SESSION['nombre'] = $row['nombre'];
                $_SESSION['apellido'] = $row['apellido'];
                header('Location: inicio.php');
                exit;
            } else {
                $error_login = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                Contraseña incorrecta
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                </button>
                              </div>";
            }
        } else {
            $error_login = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            Correo no registrado
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button>
                          </div>";
        }

        $stmt->close();
        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos/estilo-register.css">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function togglePassword() {
            var passwordField = document.getElementById("contraseña");
            if (passwordField.type === "password") {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        }
    </script>
</head>
<body>
<div class="container">
    <h2 class="text-center">Iniciar Sesión</h2>
    <?php
    if (isset($error_login)) {
        echo $error_login;
    }
    ?>
    <form action="login.php" method="post">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="contraseña">Contraseña:</label>
            <div class="input-group">
                <input type="password" class="form-control" id="contraseña" name="contraseña" required>
            </div>
        </div>
        <div class="form-check mb-5 mt-5">
            <input type="checkbox" class="form-check-input" id="mostrarContraseña" onclick="togglePassword()">
            <label class="form-check-label" for="mostrarContraseña">Mostrar Contraseña</label>
        </div>
        <button type="submit" name="submit" class="btn btn-danger btn-block">Iniciar Sesión</button>
        <div class="separator">¿Tienes cuenta?</div>
        <a href="register.php" class="btn btn-secondary btn-block">Registrarte</a>
    </form>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
