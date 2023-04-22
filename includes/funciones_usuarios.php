<?php
//Funciones para el login de usuarios y registro de usuarios en la base de datos 
//Funcion para agregar un usuario a la base de datos

function agregarUsuario($dni, $nombre, $email, $password) {
    global $conexion;

    // Generar un hash de la contraseña para almacenarla de forma segura
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Preparar la consulta SQL para insertar el nuevo usuario
    $query = "INSERT INTO usuarios (dni, nombre, correo, contraseña) VALUES ('$dni', '$nombre', '$email', '$hashed_password')";

    // Ejecutar la consulta y verificar si fue exitosa
    if (mysqli_query($conexion, $query)) {
        return true;
    } else {
        return false;
    }
}


//Funcion para verificar si el usuario existe en la base de datos e iniciar sesion
function loginUsuario($email, $password) {
    global $conexion;

    $query = "SELECT * FROM usuarios WHERE correo = '$email'";

    $resultado = mysqli_query($conexion, $query);

    if (mysqli_num_rows($resultado) > 0) {
        $usuario = mysqli_fetch_assoc($resultado);
        $hashed_password = $usuario['contraseña'];

        if (password_verify($password, $hashed_password)) {
            $_SESSION['id_usuario'] = $usuario['id'];
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}