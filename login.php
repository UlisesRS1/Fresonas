<?php

include 'conexion.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    if (!empty($correo) && !empty($contraseña)) {
        $sql = "SELECT ID FROM usuarios WHERE Correo = '$correo' AND Contraseña = '$contraseña'";
        $resultado = $conexion->query($sql);

        if ($resultado->num_rows > 0) {          
            $row = $resultado->fetch_assoc();
            $id_usuario = $row['ID'];
            $_SESSION['user_id'] = $id_usuario;
            // en este caso haran lo que ustedes quieran
            // Si quieren que los mande a una pagina pueden simplemente poner header("Location: ruta_archivo")
            // O pueden mostrar un modal, como gusten
            // Si no saben como solo pídanle a ChatGPT, denle el código de los forms y este código y pídanle que lo haga
            header("Location: index_1.html"); 
            exit();
        } else {
            //Esto es en caso de que falle la contraseña o el correo
            echo "Correo o contraseña incorrectos.";
        }
    }
}

$conexion->close();

