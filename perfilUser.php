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
  <img src="<?= htmlspecialchars($usuario['imagen']) ?>" style="width: 350px; height: autopx; object-fit: cover;">
  <style>
    .nav__mask {
      width: 600;
      height: auto;
      background: linear-gradient(224deg, #a22fe9 -2%, #ddaafe 97%);
      border-radius: 1.5rem;
      overflow: hidden;
      display: flex;
      justify-content: center;
      align-items: flex-end;
      margin-bottom: 1rem;
    }
  </style>
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
                    <li><strong>Fecha de nacimiento:</strong> <br><?php echo $usuario['fecha_nacimiento']; ?></li>
                    <li><strong>Dirección:</strong> <?php echo $usuario['direccion']; ?></li>
                    <li><strong>Ciudad:</strong> <?php echo $usuario['ciudad']; ?></li>
                    <li><strong>Contraseña:</strong> ********</li>
                </ul>   
    </div>
    <div class="IMGperfil" style="display: flex; justify-content: center; align-items: center;">
    <img src="<?= htmlspecialchars($usuario['imagen']) ?>" style="max-width: 300px; max-height: 400px; width: auto; height: auto; object-fit: cover;">
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
  font-size: 3em;
  margin-right: 1em;
  margin-top: 0; /* agrega esta línea para mover el h1 hacia arriba */
  align-self: flex-start;

}

h1 {
  font-size: 3.1rem; /* aumenta el tamaño de la fuente */
  margin-bottom: -0.1rem;
}

.contper {
  display: flex;
  justify-content: space-between;
  align-items: center;
 
}

.containerPERFIL {
  margin-right: 22rem;
  font-size: 1.4rem; /* aumenta el tamaño de la fuente */
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
  width: auto; /* aumenta el tamaño de la imagen */
  height: auto; /* aumenta el tamaño de la imagen */
  border-radius: 10px; /* cambia el borde redondeado */
  background-color: gray;
  margin-left: 2rem; /* agrega un margen a la izquierda */
}
                </style>
            </section>

            <!--=============== EDITAR ===============-->
            <section class="section section__height container editar-perfil" id="editar-perfil">
                <h1>EDITAR PERFIL</h1>
                <form action="procesos/actualizarUsuario.php" method="post" enctype="multipart/form-data" id="editarPerfilform">
                <div class="form-container">
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
            <div class="form-group full-width">
            <p>Cargar imagenes de perfil exclusivamente*</p>
            <label for="imagen">Imagen</label>
            <input type="file" name="imagen"id="imagen" class="form-control" value="<?php echo htmlspecialchars($usuario['imagen']); ?>">
            </div>
            </div>

        
        <button type="submit" class="btn btn-primary">Actualizar perfil</button>
    </form>
                <script>
                    document.getElementById("editarPerfilform").addEventListener("submit", function (event) {
    event.preventDefault();
    const formData = new FormData(event.target);

    fetch("procesos/actualizarUsuario.php", {
        method: "POST",
        body: formData,
    })
    .then((response) => response.json())
    .then((data) => {
        if (data.status === "success") {
            alert(data.message);
            // También puedes reiniciar el formulario aquí si es necesario
            window.location.href = "perfilUser.php";
        } else {
            alert(data.message);
        }
    })
    .catch((error) => {
        console.error("Error:", error);
        alert("Error, usuario registrado, cambie el DNI o correo.");
    });
}); 
                </script>
                <style>
.editar-perfil {
        background-color: #f8f9fa;
        padding: 0rem;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin-bottom: 2rem;
    }

    .editar-perfil h1 {
        margin-bottom: 1.5rem;
        font-size: 2rem;
        color: #333;
    }

    .editar-perfil .form-group {
        margin-bottom: 1.5rem;
    }

    .editar-perfil .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        font-size: 1rem;
        font-weight: bold;
        color: #333;
    }

    .editar-perfil .form-control {
        display: block;
        width: 100%;
        padding: 0.5rem;
        font-size: 1rem;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .editar-perfil .form-control:focus {
        color: #495057;
        background-color: #fff;
        border-color: #80bdff;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .editar-perfil .btn {
        display: inline-block;
        font-weight: 400;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        user-select: none;
        padding: 0.5rem 1rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 0.25rem;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .editar-perfil .btn-primary {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
    }

    .editar-perfil .btn-primary:hover {
        color: #fff;
        background-color: #0069d9;
        border-color: #0062cc;
    }

    .editar-perfil .btn-primary:focus {
        color: #fff;
        background-color: #0069d9;
        border-color: #0062cc;
        box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
    }    
    .editar-perfil .form-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 0.9rem;
    }

    .editar-perfil .form-group.full-width {
        grid-column: 1 / -1;
    }

                </style>
            </section>

            <!--=============== PORTFOLIO ===============-->
            <section class="section section__height container" id="mis-pedidos">
                <h1>MIS PEDIDOS </h1>
                
            </section>

            <!--=============== cambio de contraseña ===============-->
            <section class="section section__height container" id="cam-contra">
    <h1>CAMBIAR CONTRASEÑA</h1>
    <form action="procesos/login.php" method="post"class="sign-in-form"id="login-form">
              <h2 class="title">CAMBIAR CONTRASEÑA</h2>
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" name="contraseña" placeholder="CONTRASEÑA ACTUAL" />
              </div>
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="NUEVA CONTRASEÑA" />
              </div>
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="REPETIR CONTRASEÑA" />
              </div>
                  <a href="https://wa.me/51931998025?text=Olvidé%20mi%20contraseña.">¿Te olvidaste tu contraseña?</a>
                  <button type="submit" class="btn solid"  id="login-in-btnR">CAMBIAR </button>  
            </form>
            <STYLE>
                /* Estilos específicos para la sección #cam-contra */
#cam-contra .container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

#cam-contra .section {
    width: 400px;
    padding: 40px;
    background-color: #f5f5f5;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

#cam-contra h1, #cam-contra h2 {
    text-align: center;
    margin-bottom: 30px;
}

#cam-contra .input-field {
    position: relative;
    margin-bottom: 25px;
}

#cam-contra .input-field i {
    position: absolute;
    left: 15px;
    top: 10px;
    color: #555;
}

#cam-contra .input-field input {
    width: 100%;
    padding: 10px 30px;
    border: 1px solid #999;
    border-radius: 5px;
    font-size: 16px;
    outline: none;
}

#cam-contra a {
    display: inline-block;
    margin-bottom: 20px;
    color: #555;
    text-decoration: none;
}

#cam-contra a:hover {
    color: #888;
}

#cam-contra .btn {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    color: #fff;
    cursor: pointer;
}

#cam-contra .solid {
    background-color: #4caf50;
}

#cam-contra .solid:hover {
    background-color: #3f9d40;
}
            </STYLE>
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