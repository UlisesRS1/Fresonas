<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "examen";

//conexion a base de datos
$conexion = new mysqli($servername, $username, $password, $dbname);

if ($conexion->connect_error) {
    die("Error ". $conexion->connect_error);
}


