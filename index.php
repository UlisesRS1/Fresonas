<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
        <!-- Form de registro -->
        <!-- Lo que hace el action es llevar a cabo una accion, en este caso cuando se ingresen los datos 
                se va a llevar a cabo lo que esta en el documento, por lo cual si mueven el doc, van a tener que cambiar la ruta 
                en el action -->
        <!-- Tambien si quieren pueden copiar este o el otro form solo agreguen la ruta correcta para el action para que se lleve
            a cabo correctamente las consultas -->
        <div>
            <form method="post" action="register.php">
                <div>
                    <div>
                        <h5>Nombre</h5>
                        <input id="nombre" type="text" name="nombre">
                    </div>
                    <div>
                        <h5>Correo</h5>
                        <input id="correo" type="text" name="correo">
                    </div>
                </div>
                <div>
                    <div>
                        <h5>Contraseña</h5>
                        <input type="password" id="input" class="input" name="contraseña">
                    </div>
                </div>
                <input name="btningresar" type="submit" value="Registrarse">
            </form>
        </div>

        <!-- Form de Incio de sesión -->
        <!-- Lo que hace el action es llevar a cabo una accion, en este caso cuando se ingresen los datos 
                se va a llevar a cabo lo que esta en el documento, por lo cual si mueven el doc, van a tener que cambiar la ruta 
                en el action -->
        <!-- Tambien si quieren pueden copiar este o el otro form solo agreguen la ruta correcta para el action para que se lleve
            a cabo correctamente las consultas -->
        <div>
            <form method="post" action="login.php">
                <div>
                    <div>
                        <h5>Correo</h5>
                        <input id="correo" type="text" name="correo">
                    </div>
                </div>
                <div>
                    <div>
                        <h5>Contraseña</h5>
                        <input type="password" id="contraseña" class="input" name="contraseña">
                    </div>
                </div>
                <input name="btningresar" type="submit" value="Inciar sesion">
            </form>
        </div>
</body>
</html>