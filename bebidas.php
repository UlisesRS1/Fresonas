<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bebidas</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="estilos/estilo-productos.css">
</head>



<body>
  <?php include 'header.php'; ?>
  <br><br><br><br><br>
  <div class="container mt-5">

    <h1 class="text-center fuenteProductos mt-5" id="cards">Bebidas</h1>

    <div class="row row-cols-1 row-cols-md-3 g-4 mt-3 mb-3">
      <div class="col col-md-12 col-lg-4">
        <div class="card h-100 d-flex flex-column border-danger">
          <img src="assets/images/bebidas/cafefrio.jpg" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column align-items-center">
            <h5 class="card-title">Café frio</h5>
            <h2 class="card-text">$68.00</h2>
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
          <img src="assets/images/bebidas/frapeeoreo.jpg" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column align-items-center">
            <h5 class="card-title">Frappé oreo</h5>
            <h2 class="card-text">$85.00</h2>
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
          <img src="assets/images/bebidas/frappe.jpg" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column align-items-center">
            <h5 class="card-title">Frappé de café</h5>
            <h2 class="card-text">$80.00</h2>
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
          <img src="assets/images/bebidas/frappematcha.jpg" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column align-items-center">
            <h5 class="card-title">Frappé Matcha</h5>
            <h2 class="card-text">$86.00</h2>
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
          <img src="assets/images/bebidas/frappemora.png" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column align-items-center">
            <h5 class="card-title">Frappé mora</h5>
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
          <img src="assets/images/bebidas/malteada.jpg" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column align-items-center">
            <h5 class="card-title">Malteada</h5>
            <h2 class="card-text">$55.00</h2>
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
          <img src="assets/images/bebidas/smotiessabores.jpeg" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column align-items-center">
            <h5 class="card-title">Smoothie variedad</h5>
            <h2 class="card-text">$60.00</h2>
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
          <img src="assets/images/bebidas/smotikiwi.jpg" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column align-items-center">
            <h5 class="card-title">Smoothie kiwi</h5>
            <h2 class="card-text">$65.00</h2>
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
          <img src="assets/images/bebidas/smotimora.png" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column align-items-center">
            <h5 class="card-title">Smoothie blue berry</h5>
            <h2 class="card-text">$69.00</h2>
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