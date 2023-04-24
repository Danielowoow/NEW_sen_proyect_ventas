<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/adminstyle.css" />
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
              <a href="#">
                <i class="bx bx-home-alt icon"></i>
                <span class="text nav-text">Pagina de inicio</span>
              </a>
            </li>

            <li class="nav-link">
              <a href="#">
                <i class="bx bx-bar-chart-alt-2 icon"></i>
                <span class="text nav-text">Añadir productos</span>
              </a>
            </li>

            <li class="nav-link">
              <a href="#">
                <i class="bx bx-bell icon"></i>
                <span class="text nav-text">Añadir categorias</span>
              </a>
            </li>

            <li class="nav-link">
              <a href="#">
                <i class="bx bx-pie-chart-alt icon"></i>
                <span class="text nav-text">ADMIN usuarios</span>
              </a>
            </li>

            <li class="nav-link">
              <a href="#">
                <i class="bx bx-heart icon"></i>
                <span class="text nav-text">añadir admins</span>
              </a>
            </li>

            <li class="nav-link">
              <a href="#">
                <i class="bx bx-wallet icon"></i>
                <span class="text nav-text">mas funciones</span>
              </a>
            </li>
          </ul>
        </div>

        <div class="bottom-content">
          <li class="">
            <a href="#">
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

    <section class="perfiladmin container section section__height" id="home">
      <div>
                <h1>PERFIL ADMIN</h1>
                </div>
                <div class="contper">
                <div class="containerPERFIL">
                <h2>Bienvenido, <?php //echo $usuario['nombre']; ?></h2>
                <ul>
                    <li><strong>Correo:</strong> <?php //echo $usuario['correo']; ?></li>
                    <li><strong>DNI:</strong> <?php //echo $usuario['dni']; ?></li>
                    <li><strong>Nombre:</strong> <?php //echo $usuario['nombre']; ?></li>
                    <li><strong>Apellido Paterno:</strong> <?php //echo $usuario['apellido_paterno']; ?></li>
                    <li><strong>Apellido Materno:</strong> <?php //echo $usuario['apellido_materno']; ?></li>
                    <li><strong>Fecha de nacimiento:</strong> <br><?php //echo $usuario['fecha_nacimiento']; ?></li>
                    <li><strong>Dirección:</strong> <?php //echo $usuario['direccion']; ?></li>
                    <li><strong>Ciudad:</strong> <?php //echo $usuario['ciudad']; ?></li>
                    <li><strong>Contraseña:</strong> ********</li>
                </ul>   
    </div>

    </div>

            </section>
            <section id="agregar-producto" class="agregarproducto">
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
    <select id="categoria" name="categoria_id">

  <option value="1">Celulares y Tablets</option>
  <option value="2">Computadoras y Laptops</option>
  <option value="3">Audio y Video</option>
  <option value="4">Accesorios</option>
  <option value="5">Cámaras y Fotografía</option>
  <option value="6">Gaming</option>
  <option value="7">Redes y Conectividad</option>
  <option value="8">Impresoras y Escáneres</option>
  <option value="9">Almacenamiento</option>
  <option value="10">Proyectores y Pantallas</option>
</select>

<button type="submit" name="agregar_producto">Agregar producto</button>

  </form>
  
</section>

<section id="buscar-producto" class="buscarproducto">
    <h2>Buscar producto</h2>
    <form action="buscar_producto.php" method="post" id="buscarProductoForm">
        <label for="nombre">Nombre del producto:</label>
        <input type="text" id="nombre" name="nombre">

        <label for="precioMin">Precio mínimo:</label>
        <input type="number" id="precioMin" name="precioMin" step="0.01" min="0">

        <label for="precioMax">Precio máximo:</label>
        <input type="number" id="precioMax" name="precioMax" step="0.01" min="0">

        <label for="categoria">Categoría:</label>
        <select id="categoria" name="categoria">
            <option value="">--Seleccionar--</option>
            <!-- Aquí puedes añadir tus categorías -->
            <option value="1">Celulares y Tablets</option>
            <option value="2">Computadoras y Laptops</option>
            <option value="3">Audio y Video</option>
            <option value="4">Accesorios</option>
  <option value="5">Cámaras y Fotografía</option>
  <option value="6">Gaming</option>
  <option value="7">Redes y Conectividad</option>
  <option value="8">Impresoras y Escáneres</option>
  <option value="9">Almacenamiento</option>
  <option value="10">Proyectores y Pantallas</option>

            <!-- ... -->
        </select>

        <button type="submit" id="buscarBtn">Buscar</button>
    </form>
    <div id="resultados">
        <!-- Aquí se mostrarán los resultados -->
    </div>
    <script>
        // Función para manejar la búsqueda y mostrar los resultados
        function buscarProductos() {
            // Recopila los datos del formulario
            var formData = {
                'nombre': $('#nombre').val(),
                'precioMin': $('#precioMin').val(),
                'precioMax': $('#precioMax').val(),
                'categoria': $('#categoria').val()
            };

            // Realiza una solicitud AJAX a buscar_producto.php
            $.ajax({
                type: 'POST',
                url: 'buscar_producto.php',
                data: formData,
                dataType: 'html',
                encode: true
            })
            .done(function(data) {
                // Muestra los resultados en el div con id "resultados"
                $('#resultados').html(data);
            });
        }

        // Escucha el evento "submit" del formulario
        $('#buscarProductoForm').submit(function(event) {
            // Evita que se recargue la página
            event.preventDefault();
            // Llama a la función buscarProductos()
            buscarProductos();
        });
    </script>

</section>

<section id="ver-productos" class="verproductos">
    <h2>Todos los productos</h2>
    <button id="cargarProductosBtn">Cargar productos</button>
    <div id="productT">
        <!-- Aquí se mostrarán los productos -->
    </div>
    <script>
        function cargarProductos() {
            $.ajax({
                type: 'GET',
                url: 'productosT.php',
                dataType: 'html',
                encode: true
            })
            .done(function(data) {
                $('#productT').html(data);
            });
        }

        $('#cargarProductosBtn').click(function(event) {
            event.preventDefault();
            cargarProductos();
        });

        // Escucha el evento de clic en los botones "Eliminar"
        $(document).on('click', '.eliminarProductoBtn', function(event) {
            event.preventDefault();
            var productoId = $(this).data('producto-id');
            var confirmacion = confirm('¿Está seguro de que desea eliminar este producto?');
            if (confirmacion) {
                $.ajax({
                    type: 'POST',
                    url: 'eliminar_producto.php',
                    data: {
                        'producto_id': productoId
                    },
                    dataType: 'json'
                })
                .done(function(data) {
                    if (data.success) {
                        cargarProductos();
                    } else {
                        alert('Error al eliminar el producto.');
                    }
                });
            }
        });

        // Escucha el evento de clic en los botones "Editar"
        $(document).on('click', '.editarProductoBtn', function(event) {
            event.preventDefault();
            var productoId = $(this).data('producto-id');
            // Agregar código aquí para redirigir a la página de edición del producto
            // por ejemplo:
            window.location.href = 'editar_producto.php?id=' + productoId;
        });
    </script>
</section>  
<section id="buscar-usuario" class="buscarusario">
  <h2>Buscar usuario</h2>
  <form action="" method="post">
    <label for="busqueda">Ingresa el correo electrónico o el DNI del usuario:</label>
    <input type="text" id="busqueda" name="busqueda" required>
    <button type="submit">Buscar</button>
  </form>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Correo</th>
        <th>DNI</th>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Fecha de nacimiento</th>
        <th>Dirección</th>
        <th>Ciudad</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
  <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $busqueda = $_POST['busqueda'];
     // $usuarios = buscarUsuario($busqueda);

      if ($usuarios) {
        // Recorrer la lista de usuarios y mostrarlos en la tabla
        foreach ($usuarios as $usuario) {
          echo "<tr>";
          echo "<td>{$usuario['id']}</td>";
          echo "<td>{$usuario['correo']}</td>";
          echo "<td>{$usuario['dni']}</td>";
          echo "<td>{$usuario['nombre']}</td>";
          echo "<td>{$usuario['apellido_paterno']}</td>";
          echo "<td>{$usuario['apellido_materno']}</td>";
          echo "<td>{$usuario['fecha_nacimiento']}</td>";
          echo "<td>{$usuario['direccion']}</td>";
          echo "<td>{$usuario['ciudad']}</td>";
          echo "<td>";
          echo "<form action='editar_usuario.php' method='post'>";
          echo "<input type='hidden' name='id' value='{$usuario['id']}'>";
          echo "<button type='submit' onclick='return confirm(\"¿Está seguro de eliminar este usuario?\");'><i class='bi bi-pencil'></i></button>";
          echo "</form>";
          echo "<form action='eliminar_usuario.php' method='post'>";
          echo "<input type='hidden' name='id' value='{$usuario['id']}'>";
          echo "<button type='submit' onclick='return confirm(\"¿Está seguro de eliminar este usuario?\");'><i class='bi bi-trash'></i></button>";
          echo "</form>";

          echo "</td>";
          echo "</tr>";
        }
      } else {
        // Mostrar un mensaje si no se encontraron usuarios
        echo "<tr><td colspan='10'>No hay usuarios registrados.</td></tr>";
      }
    }
  ?>
      </tbody>
  </table>
</section>
<section id="ver-usuarios" class="verusuario"> 
  <h2>Usuarios</h2>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Correo</th>
        <th>DNI</th>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Fecha de nacimiento</th>
        <th>Dirección</th>
        <th>Ciudad</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php
        // Obtener la lista de usuarios
        //$usuarios = obtenerUsuarios();
        
        // Verificar si se encontraron usuarios
        if ($usuarios) {
          // Recorrer la lista de usuarios y mostrarlos en la tabla
          foreach ($usuarios as $usuario) {
            echo "<tr>";
            echo "<td>{$usuario['id']}</td>";
            echo "<td>{$usuario['correo']}</td>";
            echo "<td>{$usuario['dni']}</td>";
            echo "<td>{$usuario['nombre']}</td>";
            echo "<td>{$usuario['apellido_paterno']}</td>";
            echo "<td>{$usuario['apellido_materno']}</td>";
            echo "<td>{$usuario['fecha_nacimiento']}</td>";
            echo "<td>{$usuario['direccion']}</td>";
            echo "<td>{$usuario['ciudad']}</td>";
            echo "<td>";
            echo "<form action='editar_usuario.php' method='post'>";
            echo "<input type='hidden' name='id' value='{$usuario['id']}'>";
            echo "<button type='submit' onclick='return confirm(\"¿Está seguro editar este usuario?\");'><i class='bi bi-pencil'></i></button>";
            echo "</form>";
            echo "<form action='eliminar_usuario.php' method='post'>";
            echo "<input type='hidden' name='id' value='{$usuario['id']}'>";
            echo "<button type='submit' onclick='return confirm(\"¿Está seguro de eliminar este usuario?\");'><i class='bi bi-trash'></i></button>";
            echo "</form>";

            echo "</td>";
            echo "</tr>";
          }
        } else {
          // Mostrar un mensaje si no se encontraron usuarios
          echo "<tr><td colspan='10'>No hay usuarios registrados.</td></tr>";
        }
      ?>
    </tbody>
  </table>
</section>
<section class="agregaradmin" >
  <h2>Agregar administradoraaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</h2>
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
