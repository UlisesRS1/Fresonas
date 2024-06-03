<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos/estilo-contactanos.css">
    <link rel="stylesheet" href="estilos/estilo-footer.css">
    
   
</head>
<body>
<?php include 'header.php'; ?>
  <br><br><br><br><br>
<div class="container">
        <div class="form-container">
            <form id="contactForm" class="needs-validation" novalidate>
                <h1 class="text-center fuente">Contáctanos</h1>
                <p class="fs-6">Este formulario es para comunicación por parte de proveedores, posibles aliados, eventos y otros temas no relacionados con Pedidos o Talleres. <br>
                    Ir a la sección correspondiente para pedidos de nuestra variedad de postres</p>
                <div class="mb-3">
                    <label for="nameInput" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nameInput" placeholder="Nombre" required>
                    <div class="invalid-feedback">
                        Por favor, ingresa tu nombre.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="emailInput" class="form-label">Email</label>
                    <input type="email" class="form-control" id="emailInput" placeholder="ejemplo@gmail.com" required>
                    <div class="invalid-feedback">
                        Por favor, ingresa un email válido.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="messageTextarea" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="messageTextarea" rows="3" required></textarea>
                    <div class="invalid-feedback">
                        Por favor, escribe un mensaje.
                    </div>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="privacyCheck" required>
                    <label class="form-check-label" for="privacyCheck">Acepto las <a href="#" class="privaci-link" data-bs-toggle="modal" data-bs-target="#privacyModal">políticas de privacidad</a></label>
                    <div class="invalid-feedback">
                        Debes aceptar las políticas de privacidad.
                    </div>
                </div>
                <div class="col-auto text-center">
                    <button type="submit" class="btn btn-danger mb-3">Enviar formulario</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal de Políticas de Privacidad -->
    <div class="modal fade" id="privacyModal" tabindex="-1" aria-labelledby="privacyModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="privacyModalLabel">Políticas de Privacidad</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>En "Fresonas", nos comprometemos a proteger la privacidad de nuestros clientes. Esta política de privacidad explica cómo recopilamos, usamos, compartimos y protegemos su información personal cuando visita nuestro sitio web y realiza compras de nuestros productos. Recopilamos información personal, como su nombre, dirección, número de teléfono, dirección de correo electrónico, detalles de la tarjeta de crédito o débito, información de facturación y credenciales de cuenta si crea una cuenta en nuestro sitio web. También recopilamos información no personal, como datos de navegación, incluyendo dirección IP, tipo de navegador, páginas visitadas y tiempo de visita, así como información recopilada a través de cookies y otras tecnologías de seguimiento para mejorar su experiencia de usuario.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Confirmación de Envío -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Formulario Enviado</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Formulario enviado. Revisaremos tu mensaje lo más pronto posible, para darte una respuesta.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- inicia pie de pagina -->
   

    <!-- Pie de página -->
    <footer class="footer encabezado p-3">
        
            <div class="row">
                <div class="col-lg-4 col-12">
                    <h3>Acerca de</h3>
                    <p>Somos una empresa dedicada a proporcionar los mejores productos y servicios a nuestros clientes. Nuestro compromiso es su satisfacción.</p>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <h3>Contacto</h3>
                    <p>
                        <img src="assets/icon/email.svg" alt="Email" class="iconosredes me-2">
                        Correo electrónico: <a href="mailto:info@tuempresa.com">info@tuempresa.com</a>
                    </p>
                    <p>
                        <img src="assets/icon/whatsapp.svg" alt="Whatsapp" class="iconosredes me-2">
                        WhatsApp: <a href="https://wa.me/1234567890" target="_blank">123 456 7890</a>
                    </p>
                    <p>
                        <img src="assets/icon/phone.svg" alt="Phone" class="iconosredes me-2">
                        Teléfono: <a href="tel:+1234567890">+1 234 567 890</a>
                    </p>
                </div>
                <div class="col-lg-4 col-md-12">
                    <h3>Redes Sociales</h3>
                    <div class="d-flex">
                        <a href="https://facebook.com" target="_blank" class="iconosredes me-3">
                            <img src="assets/icon/facebook.svg" alt="Facebook">
                        </a>
                        <a href="https://twitter.com" target="_blank" class="iconosredes me-3">
                            <img src="assets/icon/twitter-x.svg" alt="Twitter">
                        </a>
                        <a href="https://instagram.com" target="_blank" class="iconosredes me-3">
                            <img src="assets/icon/instagram.svg" alt="Instagram">
                        </a>
                    </div>
                </div>
            </div>
        
    </footer>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
        // Bootstrap custom validation
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        } else {
                            event.preventDefault();
                            var confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'))
                            confirmationModal.show();
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>
</html>
