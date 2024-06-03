<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Postres</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="estilos/estilo-productos.css">
</head>



<body>
  <?php include 'header.php'; ?>
  <br><br><br><br><br>
  <div class="container mt-5">


    <h1 class="text-center fuenteProductos mt-5" id="cards">Postres</h1>

    <div class="row row-cols-1 row-cols-md-3 g-4 mt-3 mb-3">
      <div class="col col-md-6 col-lg-4">
        <div class="card h-100 d-flex flex-column border-danger">
          <img src="assets/images/postres/bombas.jpg" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column align-items-center">
            <h5 class="card-title">Bombas de fresa</h5>
            <h2 class="card-text">$35.00</h2>
            <button type="button" class="btn btn-danger btn-md mt-auto mb-2" style="width: auto;" data-bs-toggle="modal"
              data-bs-target="#modalFresas">
              Agregar
              <img src="assets/icon/cart-fill.svg" class="invert-color" width="24" height="24" alt="">
            </button>
          </div>
        </div>
      </div>
      <div class="col col-md-6 col-lg-4">
        <div class="card h-100 d-flex flex-column border-danger">
          <img src="assets/images/postres/browni.jpg" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column align-items-center">
            <h5 class="card-title">Brownie</h5>
            <h2 class="card-text">$45.00</h2>
            <button type="button" class="btn btn-danger btn-md mt-auto mb-2" style="width: auto;" data-bs-toggle="modal"
              data-bs-target="#modalMango">
              Agregar
              <img src="assets/icon/cart-fill.svg" class="invert-color" width="24" height="24" alt="">
            </button>
          </div>
        </div>
      </div>
      <div class="col col-md-6 col-lg-4">
        <div class="card h-100 d-flex flex-column border-danger">
          <img src="assets/images/postres/carlotas3.jpg" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column align-items-center">
            <h5 class="card-title">Carlotas mini</h5>
            <h2 class="card-text">$25.00</h2>
            <button type="button" class="btn btn-danger btn-md mt-auto mb-2" style="width: auto;" data-bs-toggle="modal"
              data-bs-target="#modalFrutas">
              Agregar
              <img src="assets/icon/cart-fill.svg" class="invert-color" width="24" height="24" alt="">
            </button>
          </div>
        </div>
      </div>
      <!-- tarjetas de prueba -->
      <div class="col col-md-6 col-lg-4">
        <div class="card h-100 d-flex flex-column border-danger">
          <img src="assets/images/postres/cheescake.jpg" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column align-items-center">
            <h5 class="card-title">Cheesecake</h5>
            <h2 class="card-text">$50.00</h2>
            <button type="button" class="btn btn-danger btn-md mt-auto mb-2" style="width: auto;" data-bs-toggle="modal"
              data-bs-target="#modalFrutas">
              Agregar
              <img src="assets/icon/cart-fill.svg" class="invert-color" width="24" height="24" alt="">
            </button>
          </div>
        </div>
      </div>
      <div class="col col-md-6 col-lg-4">
        <div class="card h-100 d-flex flex-column border-danger">
          <img src="assets/images/postres/flan.png" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column align-items-center">
            <h5 class="card-title">Flan</h5>
            <h2 class="card-text">$40.00</h2>
            <button type="button" class="btn btn-danger btn-md mt-auto mb-2" style="width: auto;" data-bs-toggle="modal"
              data-bs-target="#modalFrutas">
              Agregar
              <img src="assets/icon/cart-fill.svg" class="invert-color" width="24" height="24" alt="">
            </button>
          </div>
        </div>
      </div>
      <div class="col col-md-6 col-lg-4">
        <div class="card h-100 d-flex flex-column border-danger">
          <img src="assets/images/postres/fresascrema.png" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column align-items-center">
            <h5 class="card-title">Fresas con crema</h5>
            <h2 class="card-text">$30.00</h2>
            <button type="button" class="btn btn-danger btn-md mt-auto mb-2" style="width: auto;" data-bs-toggle="modal"
              data-bs-target="#modalFrutas">
              Agregar
              <img src="assets/icon/cart-fill.svg" class="invert-color" width="24" height="24" alt="">
            </button>
          </div>
        </div>
      </div>

      <div class="col col-md-6 col-lg-4">
        <div class="card h-100 d-flex flex-column border-danger">
          <img src="assets/images/postres/frutascrema.png" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column align-items-center">
            <h5 class="card-title">Frutas con crema</h5>
            <h2 class="card-text">$45.00</h2>
            <button type="button" class="btn btn-danger btn-md mt-auto mb-2" style="width: auto;" data-bs-toggle="modal"
              data-bs-target="#modalFrutas">
              Agregar
              <img src="assets/icon/cart-fill.svg" class="invert-color" width="24" height="24" alt="">
            </button>
          </div>
        </div>
      </div>
      <div class="col col-md-6 col-lg-4">
        <div class="card h-100 d-flex flex-column border-danger">
          <img src="assets/images/postres/gelatina.jpg" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column align-items-center">
            <h5 class="card-title">Gelatina</h5>
            <h2 class="card-text">$36.00</h2>
            <button type="button" class="btn btn-danger btn-md mt-auto mb-2" style="width: auto;" data-bs-toggle="modal"
              data-bs-target="#modalFrutas">
              Agregar
              <img src="assets/icon/cart-fill.svg" class="invert-color" width="24" height="24" alt="">
            </button>
          </div>
        </div>
      </div>
      <div class="col col-md-12 col-lg-4">
        <div class="card h-100 d-flex flex-column border-danger">
          <img src="assets/images/postres/mangocrema.png" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column align-items-center">
            <h5 class="card-title">Mango con crema</h5>
            <h2 class="card-text">$36.00</h2>
            <button type="button" class="btn btn-danger btn-md mt-auto mb-2" style="width: auto;" data-bs-toggle="modal"
              data-bs-target="#modalFrutas">
              Agregar
              <img src="assets/icon/cart-fill.svg" class="invert-color" width="24" height="24" alt="">
            </button>
          </div>
        </div>
      </div>

    </div>

  </div>

  <?php include 'footer.php'; ?>
  <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>