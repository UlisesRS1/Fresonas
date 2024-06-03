<?php
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION['logged']) || $_SESSION['logged'] !== true) {
    header('Location: login.php');
    exit;
}

// Función para eliminar la cuenta
function eliminarCuenta()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fresonas";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Eliminar cuenta del usuario basado en su correo electrónico
    $email = $_SESSION['email'];
    $sql = "DELETE FROM usuarios WHERE email=?";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        $mensaje = "Error en la preparación de la consulta: " . $conn->error;
    } else {
        $stmt->bind_param("s", $email);

        if ($stmt->execute()) {
            // Si se elimina la cuenta, destruir la sesión y redirigir al usuario a la página de inicio de sesión
            session_destroy();
            header('Location: login.php');
            exit;
        } else {
            $mensaje = "Error al eliminar la cuenta: " . $stmt->error;
        }

        $stmt->close();
    }

    $conn->close();
}

// Verificar si se ha enviado la solicitud de eliminar cuenta
if (isset($_POST['eliminar'])) {
    eliminarCuenta();
}

// Verificar si se ha enviado la solicitud de cerrar sesión
if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos/estilo-register.css">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
       

        .btn-group-equal .btn {
            width: 100%;
            margin-top: 10px;
        }

        .header-bar {
            background-color: #dc3545;
            padding: 10px;
            color: white;
        }

        .header-bar a {
            color: white;
            text-decoration: none;
        }

        .container {
            margin-top: 50px;
        }

        .user-info {
            margin-top: 30px;
        }
        .user-icon {
            font-size: 15rem; /* Puedes ajustar este valor para cambiar el tamaño */
            color: #6c757d;
        }
    </style>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <div class="container">
        <div class="text-center user-info">
            <h2 class="mt-3">Bienvenido, <?php echo htmlspecialchars($_SESSION['nombre']); ?>!</h2>
            <i class="bi bi-person-circle text-danger" style="font-size: 6rem;" ></i>
            <p><strong>Nombre:</strong> <?php echo htmlspecialchars($_SESSION['nombre']); ?></p>
            <p><strong>Apellido:</strong> <?php echo htmlspecialchars($_SESSION['apellido']); ?></p>
            <p><strong>Correo electrónico:</strong> <?php echo htmlspecialchars($_SESSION['email']); ?></p>
            <p><strong>Contraseña:</strong> ••••••••••</p>
        </div>

        <button type="button" class="btn btn-danger btn-block mb-2" data-toggle="modal" data-target="#confirmModal">Eliminar Cuenta</button>
        <form action="" method="post">
            <button type="submit" name="logout" class="btn btn-secondary btn-block mb-2">Cerrar Sesión</button>
        </form>
        <a href="modificar.php" class="btn btn-danger btn-block mb-2">Modificar contraseña</a>
        <a href="inicio.php" class="btn btn-secondary btn-block mb-2">Regresar</a>
    </div>

    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmModalLabel">Confirmar Eliminación</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ¿Estás seguro de que quieres eliminar tu cuenta? Esta acción no se puede deshacer.
                </div>
                <div class="modal-footer">
                    <form action="" method="post">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="submit" name="eliminar" class="btn btn-danger">Sí, eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
