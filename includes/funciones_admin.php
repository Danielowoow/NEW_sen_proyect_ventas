<?php
function loginadmin($email, $password) {
  global $conexion;

  $query = "SELECT * FROM administradores WHERE correo = '$email'";

  $resultado = mysqli_query($conexion, $query);

  if (mysqli_num_rows($resultado) > 0) {
      $usuario = mysqli_fetch_assoc($resultado);
      $stored_password = $usuario['contraseña'];

      if ($password == $stored_password) {
          $_SESSION['id_usuario'] = $usuario['id'];
          $_SESSION['admin_logged_in'] = true; // Agrega esta línea
 
          return true;
      } else {
          return false;
      }
  } else {
      return false;
  }
}
function agregarCategoria($nombre, $descripcion) {
    include '../db_conectar/conexion.php';
    global $conexion;
    $stmt = $conexion->prepare("INSERT INTO categorias (nombre, descripcion) VALUES (?, ?)");
    $stmt->bind_param("ss", $nombre, $descripcion);
    $stmt->execute();
    $stmt->close();
  }

