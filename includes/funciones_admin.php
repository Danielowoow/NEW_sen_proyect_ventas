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
  function borrarCategoria($id) {
    include '../db_conectar/conexion.php';
    global $conexion;
  
    $consulta = "DELETE FROM categorias WHERE id = ?";
    $sentencia = mysqli_prepare($conexion, $consulta);
    mysqli_stmt_bind_param($sentencia, "i", $id);
  
    if (!mysqli_stmt_execute($sentencia)) {
      die('Error en la consulta: ' . mysqli_error($conexion));
    }
  
    mysqli_stmt_close($sentencia);
    mysqli_close($conexion);
  
    return true;
  }
  
  function obtenerTodasCategorias() {
    include '../db_conectar/conexion.php';
    global $conexion;
  
    $consulta = "SELECT * FROM categorias ORDER BY nombre ASC";
  
    $resultado = mysqli_query($conexion, $consulta);
  
    if (!$resultado) {
        die('Error en la consulta: ' . mysqli_error($conexion));
    }
  
    $categorias = array();
    while ($categoria = mysqli_fetch_assoc($resultado)) {
        $categorias[] = $categoria;
    }
  
    return $categorias;
  }
  function obtenerCategoria($id) {
    include '../db_conectar/conexion.php';
    global $conexion;
  
    $consulta = "SELECT * FROM categorias WHERE id = ?";
    $sentencia = mysqli_prepare($conexion, $consulta);
    mysqli_stmt_bind_param($sentencia, "i", $id);
  
    if (!mysqli_stmt_execute($sentencia)) {
        die('Error en la consulta: ' . mysqli_error($conexion));
    }
  
    $resultado = mysqli_stmt_get_result($sentencia);
    $categoria = mysqli_fetch_assoc($resultado);
  
    mysqli_stmt_close($sentencia);
    mysqli_close($conexion);
  
    return $categoria;
}
