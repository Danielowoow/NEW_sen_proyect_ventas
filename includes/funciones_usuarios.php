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
function actualizarUsuario($id_usuario, $nombre, $apellido_paterno, $apellido_materno, $email, $dni, $fecha_nacimiento, $direccion, $ciudad, $hashed_password, $imagen) {
    global $conexion;

    // Si la fecha de nacimiento está vacía, establece su valor en NULL
    if (empty($fecha_nacimiento)) {
        $fecha_nacimiento = 'NULL';
    } else {
        // Asegúrate de que la fecha esté entre comillas simples para que sea tratada como una cadena en la consulta SQL
        $fecha_nacimiento = "'$fecha_nacimiento'";
    }
    $ruta_imagen = '';
if ($imagen['error'] === UPLOAD_ERR_OK) {
  $nombre_imagen = uniqid() . '_' . $imagen['name'];
  $ruta_imagen = 'imagenes/perfil' . $nombre_imagen;
  $ruta_absoluta = 'C:\xampp\htdocs\SEN_proyect_ventas\\' . $ruta_imagen;
  move_uploaded_file($imagen['tmp_name'], $ruta_absoluta);
}

    $query = "UPDATE usuarios SET nombre = '$nombre', apellido_paterno = '$apellido_paterno', apellido_materno = '$apellido_materno', correo = '$email', dni = '$dni', fecha_nacimiento = $fecha_nacimiento, direccion = '$direccion', ciudad = '$ciudad', contraseña = '$hashed_password', imagen = '$ruta_imagen' WHERE id = $id_usuario";

    if (mysqli_query($conexion, $query)) {
        return true;
    } else {
        echo "Error al actualizar el usuario: " . mysqli_error($conexion);
        return false;
    }
}