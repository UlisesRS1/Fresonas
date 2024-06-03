<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Merch</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="estilos/estilo-productos.css">
</head>



<body>
  <?php include 'header.php'; ?>
  <br><br><br><br><br>
  <div class="container">


    <h1 class="text-center fuenteProductos mt-5" id="cards">Nuestra Merch</h1>

    <div class="row row-cols-1 row-cols-md-3 g-4 mt-3 mb-3">
      <div class="col col-md-12 col-lg-4">
        <div class="card h-100 d-flex flex-column border-danger">
          <img src="assets/images/merch/posillo.jpg" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column align-items-center">
            <h5 class="card-title">Posillo personalizado</h5>
            <h2 class="card-text">$150.00</h2>
            <button type="button" class="btn btn-danger btn-md mt-auto mb-2" style="width: auto;" data-bs-toggle="modal"
              data-bs-target="#modalFresas">
              Agregar
              <img src="assets/icon/cart-fill.svg" class="invert-color" width="24" height="24" alt="">
            </button>
          </div>
        </div>
      </div>
      <div class="col col-md-12 col-lg-4">
        <div class="card h-100 d-flex flex-column border-danger">
          <img src="assets/images/merch/taza.jpg" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column align-items-center">
            <h5 class="card-title">Taza diseño simple</h5>
            <h2 class="card-text">$160.00</h2>
            <button type="button" class="btn btn-danger btn-md mt-auto mb-2" style="width: auto;" data-bs-toggle="modal"
              data-bs-target="#modalMango">
              Agregar
              <img src="assets/icon/cart-fill.svg" class="invert-color" width="24" height="24" alt="">
            </button>
          </div>
        </div>
      </div>
      <div class="col col-md-12 col-lg-4">
        <div class="card h-100 d-flex flex-column border-danger">
          <img src="assets/images/merch/tazaper.jpg" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column align-items-center">
            <h5 class="card-title">Taza con frase</h5>
            <h2 class="card-text">$200.00</h2>
            <button type="button" class="btn btn-danger btn-md mt-auto mb-2" style="width: auto;" data-bs-toggle="modal"
              data-bs-target="#modalFrutas">
              Agregar
              <img src="assets/icon/cart-fill.svg" class="invert-color" width="24" height="24" alt="">
            </button>
          </div>
        </div>
      </div>
      <!-- tarjetas de prueba -->
      <div class="col col-md-12 col-lg-4">
        <div class="card h-100 d-flex flex-column border-danger">
          <img src="assets/images/merch/termicos.png" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column align-items-center">
            <h5 class="card-title">Vasos térmicos personalizados</h5>
            <h2 class="card-text">$210.00</h2>
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
          <img src="assets/images/merch/termicos3.jpg" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column align-items-center">
            <h5 class="card-title">Vasos térmicos</h5>
            <h2 class="card-text">$180.00</h2>
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
          <img src="assets/images/merch/vaso.jpg" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column align-items-center">
            <h5 class="card-title">Térmicos con frase</h5>
            <h2 class="card-text">$250.00</h2>
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
          <img src="assets/images/merch/vasocorazon.jpg" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column align-items-center">
            <h5 class="card-title">Vaso de vidrio corazones</h5>
            <h2 class="card-text">$90.00</h2>
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
          <img src="assets/images/merch/vasoflores.jpg" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column align-items-center">
            <h5 class="card-title">Vaso de vidrio flores</h5>
            <h2 class="card-text">$90.00</h2>
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
          <img src="assets/images/merch/vasovidrio.jpg" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column align-items-center">
            <h5 class="card-title">Vaso de vidrio</h5>
            <h2 class="card-text">$50.00</h2>
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