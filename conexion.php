<?php
// Datos de la conexión
$servername = "localhost"; // Cambia esto si tu servidor de base de datos no es local
$username = "root"; // Tu usuario de base de datos
$lastname = "";
$password = ""; // Tu contraseña de base de datos
$dbname = "fresonas"; // El nombre de tu base de datos

// Crear conexión
$conexion = new mysqli($servername, $username, $lastname, $password, $dbname);

// Verificar conexión
if ($conexion) {
    echo "Conexión exitosa a la base de datos.";
} else {
    die("Conexión fallida: " . $conexion->connect_error);
}


?>
