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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">>
    <link rel="stylesheet" href="estilos/estilo-inicio.css">
    <link rel="stylesheet" href="estilos/estilo-header.css">
    <link rel="stylesheet" href="estilos/estilo.css">
    <link rel="stylesheet" href="estilos/estilo-productos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <title>Inicio</title>

</head>

<body>


    <?php include 'header.php'; ?>
    <br><br><br><br><br>
    <!-- Contenido de la página -->

    <!-- Carrusel -->
    <div class="container mt-5 mb-5">
        <div id="carouselExampleIndicators" class="carousel slide mb-5" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/images/img-galeria/pay.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/img-galeria/fresas1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/img-galeria/cremosofresa.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/img-galeria/smotimora.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <!-- suscribirse -->
    <div id="suscribirse"
        class="container-fluid suscribirse mb-5 mt-5 justify-content-center align-items-center text-center">
        <div class="suscribirse mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="mb-4 mt-4">¡Suscríbete para recibir más recetas deliciosas!</h2>
                        <p class="text-white d-none d-sm-block">Únete a nuestra comunidad y descubre las mejores recetas
                            de postres.</p>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Suscribirse
                        </button>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block align-self-center">
                        <img src="assets/images/logo1.png" alt="Suscribirse" class="img-fluid" width="400px"
                            height="400px">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content ">
                <div class="modal-header mb-3">
                    <img src="assets/images/icono-color.jpg" height="30px" width="30px" alt="">
                    <h5 class="modal-title" id="exampleModalLabel"> Suscribirse</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="row g-lg-5 justify-content-center">
                    <div class="col-8">
                        <label for="validationDefaultUsername" class="form-label">Correo electrónico</label>
                        <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend2">@</span>
                            <input type="text" class="form-control" id="validationDefaultUsername"
                                aria-describedby="inputGroupPrepend2" required>
                        </div>
                    </div>
                    <div class="col-8">
                        <label for="validationDefault03" class="form-label">Mensaje (opcional)</label>
                        <input type="text" class="form-control" id="validationDefault03">
                    </div>

                    <div class="col-8">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                            <label class="form-check-label" for="invalidCheck2">
                                Acepto los términos y condiciones
                            </label>
                        </div>
                    </div>
                    <div class="col-12 text-center mb-3">
                        <button class="btn btn-danger" type="submit">Enviar formulario</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <div class="container">
        <h1 class="text-center fuenteProductos mt-5" id="cards">¡Promociones!</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-3 mb-3">
            <div class="col col-md-12 col-lg-4">
                <div class="card h-100 d-flex flex-column border-danger">
                    <img src="assets/images/postres/bombas.jpg" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column align-items-center">
                        <h5 class="card-title">Bombas de fresa</h5>
                        <h2 class="card-text">$35.00</h2>
                        <button type="button" class="btn btn-danger btn-md mt-auto mb-2" style="width: auto;"
                            data-bs-toggle="modal" data-bs-target="#modalFresas">
                            Agregar
                            <img src="assets/icon/cart-fill.svg" class="invert-color" width="24" height="24" alt="">
                        </button>
                    </div>
                </div>
            </div>
            <div class="col col-md-12 col-lg-4">
                <div class="card h-100 d-flex flex-column border-danger">
                    <img src="assets/images/postres/browni.jpg" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column align-items-center">
                        <h5 class="card-title">Brownie</h5>
                        <h2 class="card-text">$45.00</h2>
                        <button type="button" class="btn btn-danger btn-md mt-auto mb-2" style="width: auto;"
                            data-bs-toggle="modal" data-bs-target="#modalMango">
                            Agregar
                            <img src="assets/icon/cart-fill.svg" class="invert-color" width="24" height="24" alt="">
                        </button>
                    </div>
                </div>
            </div>
            <div class="col col-md-12 col-lg-4">
                <div class="card h-100 d-flex flex-column border-danger">
                    <img src="assets/images/postres/carlotas3.jpg" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column align-items-center">
                        <h5 class="card-title">Carlotas mini</h5>
                        <h2 class="card-text">$25.00</h2>
                        <button type="button" class="btn btn-danger btn-md mt-auto mb-2" style="width: auto;"
                            data-bs-toggle="modal" data-bs-target="#modalFrutas">
                            Agregar
                            <img src="assets/icon/cart-fill.svg" class="invert-color" width="24" height="24" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>