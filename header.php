<?php
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION['logged']) || $_SESSION['logged'] !== true) {
    header('Location: login.php');
    exit;
}

$nombreUsuario = $_SESSION['nombre'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos/estilo.css">
    <link rel="stylesheet" href="estilos/estilo-header.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>

<body>
    <div class="container-fluid">
        <header class="text-center encabezado">
            <nav class="navbar navbar-expand-lg margen-nav fixed-top encabezado">
                <div class="container-fluid justify-content-between">
                    <div class="d-flex align-items-center">
                        <a href="inicio.php">
                         <img src="assets/images/logo1.png"  alt="logotipo" width="230" height="100" class="me-3 logo">
                        </a>
                        <h3 class="mt-2 fs-5 d-none d-lg-block margen-derecho text-white"
                            style="white-space: nowrap; overflow: hidden;">
                        </h3>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ms-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle fs-5 my-0 my-lg-3 text-white" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Productos
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="postres.php">Postres</a></li>
                                    <li><a class="dropdown-item" href="bebidas.php">Bebidas</a></li>
                                    <li><a class="dropdown-item" href="merch.php">Merch</a></li>
                                </ul>
                            </li>
                            <a class="nav-link fs-5 my-0 my-lg-3 text-white" href="galeria.php">Galeria</a>
                            <a class="nav-link fs-5 my-0 my-lg-3 text-white" href="nosotros.php">Nosotros</a>
                            <a class="nav-link fs-5 my-0 my-lg-3 text-white" href="contactanos.php">Contacto</a>

                            <span class="navbar-text ">
                                <a href="usuario.php" class="bi bi-person-fill text-white fs-5 my-0 my-lg-3"></a>
                                <p class="fs-5 my-0 my-lg-3 text-white"><?php echo $nombreUsuario; ?></p>
                            </span>

                        </div>
                    </div>
                </div>
            </nav>
        </header>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>