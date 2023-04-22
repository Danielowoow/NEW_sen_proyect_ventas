<?php
session_start();
include "db_conectar/conexion.php";

include "includes/funciones_usuarios.php";

if (!isset($_SESSION['id_usuario'])) {
    header("Location: loginregis.php");
    exit();
}

$usuario = obtenerUsuarioPorId($_SESSION['id_usuario']);

if (!is_array($usuario)) {
    echo "Error: usuario no encontrado";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/logo.ico" />
<link rel="stylesheet" href="css/bootstrap.css">    
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">  
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <!--=============== BOXICONS ===============-->
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="css/perfilstyle.css">


<script src="js/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   
<script src="js/jquery.min.js"></script>
<!--<script src="js/bootstrap.min.js"></script> -->
<!--<script src="js/autohidingnavbar.min.js"></script>-->
<script src="js/main.js"></script>
<script src="js/carrito.js"></script>
<body>
    <?php
    //include 'incfolinav/navbar.php';
    ?>
        <!--=============== NAV ===============-->
        <nav class="nav" id="nav">
            <div class="nav__menu container" id="nav-menu">
                <div class="nav__shape"></div>

                <div class="nav__close" id="nav-close">
                    <i class='bx bx-x'></i>
                </div>
                
                <div class="nav__data">
                    <div class="nav__mask">
                        <!-- Change your profile picture -->
                        <img src="assets/img/perfil.png" alt="" class="nav__img">
                    </div>

                    <span class="nav__greeting">Este es tu perfil.</span>
                    <h1 class="nav__name"><?php echo $usuario['nombre']; ?> <br> <?php echo $usuario['apellido_paterno']; ?></h1>
                </div>

                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#perfil" class="nav__link active-link">
                            <i class='bx bx-user' ></i> PERFIL 
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#editar-perfil" class="nav__link">
                            <i class='bi bi-pencil'></i> EDITAR PERFIL
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#mis-pedidos" class="nav__link">
                            <i class='bx bx-package'></i> MIS PEDIDOS   
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#cam-contra" class="nav__link">
                            <i class='bx bx-lock'></i> CAMBIAR CONTRASEÑA
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#cont" class="nav__link">
                            <i class='bx bx-message-square-detail'></i> CONTÁCTANOS
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!--=============== MAIN ===============-->
        <main class="main" id="main">
            <!--=============== HEADER ===============-->
            <header class="header" id="header">                
    <nav class="header__nav container">
        <div class="header__toggle" id="header-toggle" >
            <i class='bx bx-grid-alt'></i>
        </div >
        <div class="header__toggle" >
        <a href="./" class="header__logo">
            Tienda Online
        </a>
        </div>
        <div class="header__toggle" style="margin-right: 12%">
            <li class="nav-item dropdown" style="list-style-type: none;" >
                <label class="nav-link" for="navbarDropdown">
                    <i class="bi bi-person"></i>
                </label>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="usuarios/mis_pedidos.php">Mis pedidos</a></li>
                    <li><a class="dropdown-item" href="salir.php">Cerrar sesión</a></li>
                </ul>
            </li>
        </div>
        <div class="header__toggle">
            <a class="nav-link" href="productos/carrito.php">Nosotros</a>
        </div>
    </nav>
</header>
            </header>


            <!-- When inserting your content into sections, remove the section__height class -->
            <!--=============== HOME ===============-->
            <section class="section section__height container" id="perfil">
                <h1>PERFIL</h1>
                <div class="contper">
                <div class="containerPERFIL">
                <h2>Bienvenido, <?php echo $usuario['nombre']; ?></h2>
                <ul>
                    <li><strong>Correo:</strong> <?php echo $usuario['correo']; ?></li>
                    <li><strong>DNI:</strong> <?php echo $usuario['dni']; ?></li>
                    <li><strong>Nombre:</strong> <?php echo $usuario['nombre']; ?></li>
                    <li><strong>Apellido Paterno:</strong> <?php echo $usuario['apellido_paterno']; ?></li>
                    <li><strong>Apellido Materno:</strong> <?php echo $usuario['apellido_materno']; ?></li>
                    <li><strong>Fecha de nacimiento:</strong> <?php echo $usuario['fecha_nacimiento']; ?></li>
                    <li><strong>Dirección:</strong> <?php echo $usuario['direccion']; ?></li>
                    <li><strong>Ciudad:</strong> <?php echo $usuario['ciudad']; ?></li>
                    <li><strong>Contraseña:</strong> ********</li>
                </ul>   
    </div>
    <div class="IMGperfil">
        

    </div>
    </div>
                <style>
.section__height {
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.section__height h1 {
  font-size: 2em;
  margin-right: 1em;
  margin-top: 0; /* agrega esta línea para mover el h1 hacia arriba */
  align-self: flex-start;

}

h1 {
  font-size: 3.5rem; /* aumenta el tamaño de la fuente */
  margin-bottom: 2rem;
}

.contper {
  display: flex;
  justify-content: space-between;
  align-items: center;
 
}

.containerPERFIL {
  margin-right: 25rem;
  font-size: 1.39rem; /* aumenta el tamaño de la fuente */
}

ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

li {
  margin-bottom: 0.7rem;
}

.IMGperfil {
  width: 300px; /* aumenta el tamaño de la imagen */
  height: 400px; /* aumenta el tamaño de la imagen */
  border-radius: 10px; /* cambia el borde redondeado */
  background-color: gray;
  margin-left: 2rem; /* agrega un margen a la izquierda */
}
                </style>
            </section>

            <!--=============== EDITAR ===============-->
            <section class="section section__height container" id="editar-perfil">
                <h1>EDITAR PERFIL</h1>
                <form action="procesos/actualizarUsuario.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo htmlspecialchars($usuario['nombre']); ?>">
            </div>

            <div class="form-group">
                <label for="apellido_paterno">Apellido Paterno:</label>
                <input type="text" name="apellido_paterno" id="apellido_paterno" class="form-control" value="<?php echo htmlspecialchars($usuario['apellido_paterno']); ?>">
            </div>

            <div class="form-group">
                <label for="apellido_materno">Apellido Materno:</label>
                <input type="text" name="apellido_materno" id="apellido_materno" class="form-control" value="<?php echo htmlspecialchars($usuario['apellido_materno']); ?>">
            </div>

            <div class="form-group">
                <label for="email">Correo:</label>
                <input type="email" name="email" id="email" class="form-control" value="<?php echo htmlspecialchars($usuario['correo']); ?>">
            </div>

            <div class="form-group">
                <label for="dni">DNI:</label>
                <input type="text" name="dni" id="dni" class="form-control" placeholder="DNI" pattern="\d{8}" title="Por favor, ingrese un DNI válido de 8 dígitos." maxlength="8" value="<?php echo htmlspecialchars($usuario['dni']); ?>">
            </div>

            <div class="form-group">
                <label for="fecha_nacimiento">Fecha de nacimiento:</label>
                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" value="<?php echo htmlspecialchars($usuario['fecha_nacimiento']); ?>">
            </div>

            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" name="direccion" id="direccion" class="form-control" value="<?php echo htmlspecialchars($usuario['direccion']); ?>">
            </div>

            <div class="form-group">
                <label for="ciudad">Ciudad:</label>
                <input type="text" name="ciudad" id="ciudad" class="form-control" value="<?php echo htmlspecialchars($usuario['ciudad']); ?>">
            </div>
            <div class="form-group">
            <label for="imagen">Imagen</label>
            <input type="file" name="imagen"id="imagen" class="form-control" value="<?php echo htmlspecialchars($usuario['imagen']); ?>">
            </div>
        
        <button type="submit" class="btn btn-primary">Actualizar perfil</button>
    </form>
                
            </section>

            <!--=============== PORTFOLIO ===============-->
            <section class="section section__height container" id="mis-pedidos">
                <h1>MIS PEDIDOS </h1>
                
            </section>

            <!--=============== SKILLS ===============-->
            <section class="section section__height container" id="cam-contra">
                <h1>CAMBIAR CONTRASEÑA</h1>
                
            </section>

            <!--=============== CONTACT ===============-->
            <section class="section section__height container" id="cont">
                <h1>CONTÁCTANOS</h1>

            </section>
        </main>

        <!--=============== MAIN JS ===============-->
        <script src="js/perfilStyle.js"></script>
    </body>
</html>