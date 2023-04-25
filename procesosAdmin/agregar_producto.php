<?php
session_start();
include '../db_conectar/conexion.php';
include "../includes/funciones_admin.php";

if (!isset($_SESSION['admin_logged_in']) || !$_SESSION['admin_logged_in']) {
    header("Location: login_admin.php");
    exit;
}

// Si se envió el formulario, agregar el producto
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $modelo = $_POST['modelo'];
    $marca = $_POST['marca'];
    $stock = $_POST['stock'];
    $categoria = $_POST['categoria_id'];

    $imagen = $_FILES['imagen'];

    if (agregar_producto($nombre, $descripcion, $precio, $modelo, $marca, $stock, $imagen, $categoria)) {
        // Si se agregó el producto correctamente, redirigir a la página de productos
        header("Location: admin.php");
        exit();
    } else {
        // Si hubo un error al agregar el producto, mostrar un mensaje de error
        $mensaje_error = "Error al agregar el producto.";
    }
}

?>
