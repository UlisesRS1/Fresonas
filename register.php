<?php

include 'conexion.php';

session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

 
    if (!empty($nombre) && !empty($correo) && !empty($contraseña)) {
       
        $sql = "INSERT INTO usuarios (Nombre, Correo, Contraseña) VALUES ('$nombre', '$correo', '$contraseña')";

        if ($conexion->query($sql) === TRUE) {
            $id_usuario = $conexion->insert_id;
            $_SESSION['user_id'] = $id_usuario;
            //En esta parte deben de poner la direccion a la que queiren que los mande, despues de llevar a cabo el registro
            //                Va Aqui su ruta
            header("Location: index_1.html");
            exit();
        }
    }
}


$conexion->close();