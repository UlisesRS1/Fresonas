<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería con FancyBox</title>
    <link rel="stylesheet" href="estilos/estilos-galeria.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <style>
      
        #galeria .col-lg-4 {
            margin: 0 !important;
            padding: 20px;
        }
        #galeria img {
            width: 100%;
            height: 100%;
        }
        #galeria img:hover {
            border: 5px solid #f7f7f7;
        }
        
    </style>
</head>
<body>
<?php include 'header.php'; ?>
  <br><br><br><br><br>
    <div class="container">
        <section id="galeria" class="container p-5">
            <div class="text-center">
                <h1 class="tipografia">Próximos lanzamientos</h1>
                <p class="fs-5">Para este verano espera nuestros próximos lanzamientos, esta vez nos enfocamos en resaltar la fresa que fue el inicio de este gran proyecto.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a data-fancybox="gallery" href="assets/images/img-galeria/pay.png">
                        <img src="assets/images/img-galeria/pay.png" alt="galeria imagen">
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a data-fancybox="gallery" href="assets/images/img-galeria/fresas1.jpg">
                        <img src="assets/images/img-galeria/fresas1.jpg" alt="galeria imagen">
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a data-fancybox="gallery" href="assets/images/img-galeria/smotimora.png">
                        <img src="assets/images/img-galeria/smotimora.png" alt="galeria imagen">
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a data-fancybox="gallery" href="assets/images/img-galeria/choco-fresas.avif">
                        <img src="assets/images/img-galeria/choco-fresas.avif" alt="galeria imagen">
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a data-fancybox="gallery" href="assets/images/img-galeria/chocolate.jpg">
                        <img src="assets/images/img-galeria/chocolate.jpg" alt="galeria imagen">
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a data-fancybox="gallery" href="assets/images/img-galeria/pastel-crepa.jpg">
                        <img src="assets/images/img-galeria/pastel-crepa.jpg" alt="galeria imagen">
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a data-fancybox="gallery" href="assets/images/img-galeria/cremosofresa.jpeg">
                        <img src="assets/images/img-galeria/cremosofresa.jpeg" alt="galeria imagen">
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a data-fancybox="gallery" href="assets/images/img-galeria/paysfrutas.jpg">
                        <img src="assets/images/img-galeria/paysfrutas.jpg" alt="galeria imagen">
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a data-fancybox="gallery" href="assets/images/img-galeria/tartalina.jpg">
                        <img src="assets/images/img-galeria/tartalina.jpg" alt="galeria imagen">
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a data-fancybox="gallery" href="assets/images/img-galeria/infusion.jpg">
                        <img src="assets/images/img-galeria/infusion.jpg" alt="galeria imagen">
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a data-fancybox="gallery" href="assets/images/img-galeria/horchata.jpg">
                        <img src="assets/images/img-galeria/horchata.jpg" alt="galeria imagen">
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a data-fancybox="gallery" href="assets/images/img-galeria/bebidas.jpeg">
                        <img src="assets/images/img-galeria/bebidas.jpeg" alt="galeria imagen">
                    </a>
                </div>
            </div>
        </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $("[data-fancybox='gallery']").fancybox({
                // Puedes personalizar las opciones de FancyBox aquí
            });
        });
    </script>
    <?php include 'footer.php' ?>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
