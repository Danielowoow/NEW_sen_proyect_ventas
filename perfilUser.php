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
                    <h1 class="nav__name">nombre <br> apellido</h1>
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
                
            </section>

            <!--=============== ABOUT ===============-->
            <section class="section section__height container" id="editar-perfil">
                <h1>EDITAR PERFIL</h1>
                
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