<?php
session_start();
include "db_conectar/conexion.php";
include "includes/funciones_admin.php";

if (!isset($_SESSION['admin_logged_in']) || !$_SESSION['admin_logged_in']) {
    header("Location: loginadmin.php");
    exit;
}
$admin_id = $_SESSION['id_usuario'];
$query = "SELECT * FROM administradores WHERE id = '$admin_id'";
$resultado = mysqli_query($conexion, $query);
$admin_logged_in = mysqli_fetch_assoc($resultado);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/adminindex.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <nav class="sidebar close">
      <header>
        <div class="image-text">
          <span class="image"><img src="imagenes/img/log.png" /></span>

          <div class="text logo-text">
            <span class="name">aca debe ir nombre del admin</span>
            <span class="profession">ADMIN</span>
          </div>
        </div>
        <i class="bx bx-chevron-right toggle"></i>
      </header>

      <div class="menu-bar">
        <div class="menu">
          <li class="search-box">
            <i class="bx bx-search icon"></i>
            <input type="text" placeholder="Buscar" />
          </li>

          <ul class="menu-links">
            <li class="nav-link">
              <a href="#perfil">
                <i class="bx bx-user icon"></i>
                <span class="text nav-text">Perfil</span>
              </a>
            </li>

            <li class="nav-link">
              <a href="#agregar-producto">
                <i class="bx bx-plus icon"></i>
                <span class="text nav-text">Añadir</span>
              </a>
            </li>

            <li class="nav-link">
              <a href="#buscarUserProduct">
                <i class="bx bx-search icon"></i>
                <span class="text nav-text">Buscar USER Productos</span>
              </a>
            </li>

            <li class="nav-link">
              <a href="#ver-productos">
                <i class="bx bx-show icon"></i>
                <span class="text nav-text">Ver-productosUSER</span>
              </a>
            </li>

            <li class="nav-link">
              <a href="#A-agradmin">
                <i class="bx bx-plus icon"></i>
                <span class="text nav-text">añadir admins</span>
              </a>
            </li>

            <li class="nav-link">
              <a href="#A-soporte">
                <i class="bx bx-support icon"></i>
                <span class="text nav-text">Soporte</span>
              </a>
            </li>
          </ul>
        </div>

        <div class="bottom-content">
          <li class="">
            <a href="salir.php">
              <i class="bx bx-log-out icon"></i>
              <span class="text nav-text">Cerrar cesion</span>
            </a>
          </li>

          <li class="mode">
            <div class="sun-moon">
              <i class="bx bx-moon icon moon"></i>
              <i class="bx bx-sun icon sun"></i>
            </div>
            <span class="mode-text text">Modo oscuro</span>

            <div class="toggle-switch">
              <span class="switch"></span>
            </div>
          </li>
        </div>
      </div>
    </nav>

    <section class="perfiladmin container section section__height agregarproducto" id="perfil">
      <div class="perfiladmins">
                <h1>PERFIL ADMIN</h1>
                </div>
                <div class="contper">
                <div class="containerPERFIL">
                <h2>Bienvenido, <?php echo $admin_logged_in['nombre']; ?></h2>
                <ul>
                  <form action="" method="post">
                    <li><strong>Correo:</strong> <?php echo $admin_logged_in['correo']; ?></li>
                    <li><strong>Nombre:</strong> <?php echo $admin_logged_in['nombre']; ?></li>
                    <li><strong>Contraseña:</strong> ********</li>
                    <button type="submit" name="camcontra" class="btncontra" style="font-size: 1.2rem; padding: 0.5rem; border-radius: 5px; border: none; background-color: #007bff; color: #fff; cursor: pointer;">CAMBIAR CONTRASEÑA</button>
                    </form>
                </ul>   
    </div>

    </div>

            </section>
    
    <section id="agregar-producto" class="agregarproducto">
              <div class="agregarcategoria">
    <h2>Agregar nueva categoría</h2>
    <form action="procesosAdmin/agrcategorias.php" method="post">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required>
      <label for="descripcion">Descripción:</label>
      <textarea id="descripcion" name="descripcion"></textarea>
      <button type="submit" name="agregar_categoria">Agregar categoría</button>
    </form>
    <h2>Agregar nueva usuario</h2>
    <p>Aca podrás agregar un nuevo usuario</p>
    <form action="" method="post">
      <button type="submit">Agregar</button>
    </form>
  </div>
    <h2>Agregar producto</h2>
    <form action="agregar_producto.php" method="post" enctype="multipart/form-data">

      <label for="nombre">Nombre del producto:</label>
      <input type="text" id="nombre" name="nombre" required>

      <label for="descripcion">Descripción:</label>
      <textarea id="descripcion" name="descripcion"></textarea>

      <label for="precio">Precio:</label>
  <input type="text" id="precio" name="precio" required pattern="^\d{1,8}(\.\d{2})?$" title="Por favor, ingrese un precio válido con hasta 8 dígitos enteros y 2 dígitos decimales">

      <label for="imagen">Imagen:</label>
      <input type="file" name="imagen">

      <label for="categoria">Categoría:</label>
                <select name="categoria_id" id="categoria" class="form-control">
                    <?php //$categorias = obtenerTodasCategorias(); ?>
                    <?php //foreach ($categorias as $categoria): ?>
                        <option value="<?php// echo $categoria['id']; ?>"<?php //if ($categoria['id'] == $producto['categoria_id']) { echo ' selected'; } ?>><?php// echo htmlspecialchars($categoria['nombre']); ?></option>
                    <?php //endforeach; ?>
                </select>

  <button type="submit" name="agregar_producto">Agregar producto</button>

    </form>

    
  </section>

<section id="buscarUserProduct" class="buscar">
  <div class="buscar-forms">
    <div class="buscar-producto">
      <h2>Buscar producto</h2>
      <form action="buscar_producto.php" method="post" id="buscarProductoForm">
      <label for="nombre">Nombre del producto:</label>
        <input type="text" id="nombre" name="nombre">

        <label for="precioMin">Precio mínimo:</label>
        <input type="number" id="precioMin" name="precioMin" step="0.01" min="0">

        <label for="precioMax">Precio máximo:</label>
        <input type="number" id="precioMax" name="precioMax" step="0.01" min="0">

        <label for="categoria">Categoría:</label>
        <select name="categoria_id" id="categoria" class="form-control">
                    <?php //$categorias = obtenerTodasCategorias(); ?>
                    <?php //foreach ($categorias as $categoria): ?>
                        <option value="<?php// echo $categoria['id']; ?>"<?php //if ($categoria['id'] == $producto['categoria_id']) { echo ' selected'; } ?>><?php// echo htmlspecialchars($categoria['nombre']); ?></option>
                    <?php //endforeach; ?>
                </select>


          <button type="submit" id="buscarProductoBtn">Buscar producto</button>
      </form>
    </div>

    <div class="buscar-usuario">
      <h2>Buscar usuario</h2>
      <form action="buscar_usuario.php" method="post" id="buscarUsuarioForm">
      <label for="busqueda">Ingresa el correo electrónico o el DNI del usuario:</label>
    <input type="text" id="busqueda" name="busqueda" required>

          <button type="submit" id="buscarUsuarioBtn">Buscar usuario</button>
      </form>
    </div>
  </div>

  <div id="resultados">
      <!-- Aquí se mostrarán los resultados -->
  </div>

</section>
<section id="ver-productos" class="verproductos">
  <div></div>
    <h2>Ver productos o usuarios</h2>
    <button id="verProductosBtn">Ver productos</button>
    <button id="verUsuariosBtn">Ver usuarios</button>
    <div id="resultadosdever">
        <!-- Aquí se mostrarán los productos -->
    </div>
    </div>
</section>  



<section class="agregaradmin" id="A-agradmin">
  <h2>Agregar administrador</h2>
  <form action="agregar_administrador.php" method="post" id="agregarAdminForm">
    <div class="form-group">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required>
    </div>

    <div class="form-group">
      <label for="correo">Correo electrónico:</label>
      <input type="email" id="correo" name="correo" required>
    </div>

    <div class="form-group">
      <label for="contrasena">Contraseña:</label>
      <input type="password" id="contrasena" name="contrasena" required>
    </div>

    <button type="submit">Agregar</button>
  </form>
</section>

<section class="soporte" id="A-soporte">
  <h2>Soporte técnico</h2>
  <p>¿Tienes algún problema con tu compra? ¿Necesitas ayuda para configurar un producto?</p>
  <p>Nuestro equipo de soporte técnico está aquí para ayudarte. Completa el formulario a continuación y nos pondremos en contacto contigo lo antes posible.</p>
  <form action="" method="post" id="soporteForm">
    <div class="form-group">
      <label for="nombre">Nombre completo:</label>
      <input type="text" id="nombre" name="nombre" required>
    </div>
    <div class="form-group">
      <label for="correo">Correo electrónico:</label>
      <input type="email" id="correo" name="correo" required>
    </div>
    <div class="form-group">
      <label for="telefono">Teléfono:</label>
      <input type="tel" id="telefono" name="telefono">
    </div>
    <div class="form-group">
      <label for="mensaje">Mensaje:</label>
      <textarea id="mensaje" name="mensaje" rows="5" required></textarea>
    </div>
    <button type="submit">Enviar mensaje</button>
  </form>
</section>



    <script>
      const body = document.querySelector("body"),
  sidebar = body.querySelector("nav"),
  toggle = body.querySelector(".toggle"),
  searchBtn = body.querySelector(".search-box"),
  modeSwitch = body.querySelector(".toggle-switch"),
  modeText = body.querySelector(".mode-text");

toggle.addEventListener("click", () => {
  sidebar.classList.toggle("close");
});

searchBtn.addEventListener("click", () => {
  sidebar.classList.remove("close");
});

modeSwitch.addEventListener("click", () => {
  body.classList.toggle("dark");

  if (body.classList.contains("dark")) {
    modeText.innerText = "Light mode";
  } else {
    modeText.innerText = "Dark mode";
  }
});

    </script>
  </body>
</html>
