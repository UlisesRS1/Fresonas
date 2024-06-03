<?php
// Verificar si se envió el formulario de registro
if (isset($_POST['submit'])) {
    // Datos de conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = ""; // Asumiendo que no hay contraseña para el usuario root en XAMPP
    $dbname = "fresonas"; // Ajusta el nombre de tu base de datos si es diferente

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];

    // Asegurarse de que los campos no estén vacíos
    if (empty($nombre) || empty($apellido) || empty($email) || empty($contraseña)) {
        die("Todos los campos son obligatorios.");
    }

    // Verificar si el correo ya está registrado
    $check_email = "SELECT * FROM usuarios WHERE email=?";
    $stmt = $conn->prepare($check_email);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Si el correo ya está registrado, redirecciona con un mensaje de error
        header('Location: register.php?error=email_taken');
        exit;
    } else {
        // Preparar y ejecutar la consulta SQL para insertar un nuevo usuario
        $sql = "INSERT INTO usuarios (nombre, apellido, email, contraseña) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $nombre, $apellido, $email, $contraseña); // No hasheamos la contraseña aquí

        if ($stmt->execute()) {
            echo "Usuario registrado correctamente. <a href='login.php'>Iniciar sesión</a>";
            // Añadir sleep para ver el mensaje antes de redirigir
            sleep(3);
            header('Location: login.php'); // Redirigir al usuario al inicio de sesión después del registro
            exit;
        } else {
            echo "Error al registrar usuario: " . $stmt->error;
        }

        $stmt->close();
    }

    // Cerrar la conexión
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registro</title>
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
        <h2 class="mt-5 text-center">Regístrate</h2>
        <br><br><br>
        <?php
            if (isset($_GET['error']) && $_GET['error'] == 'email_taken') {
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        Este correo ya está registrado.
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                      </div>";
            }
        ?>
        
        <form action="register.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" class="form-control" id="apellido" name="apellido" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="contraseña">Contraseña:</label>
                <input type="password" class="form-control" id="contraseña" name="contraseña" required>
            </div>
            <div class="form-check mb-2">
                <input type="checkbox" class="form-check-input" id="mostrarContraseña" onclick="togglePassword()">
                <label class="form-check-label" for="mostrarContraseña">Mostrar Contraseña</label>
            </div>
            
            <button type="submit" class="btn btn-danger btn-block" name="submit">Registrar</button>
        </form>
        <div class="separator">¿Tienes cuenta?</div>
        <a href="login.php" class="btn btn-secondary btn-block">Iniciar sesión</a>

    </div>
</body>

</html>
