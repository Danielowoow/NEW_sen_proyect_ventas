<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>INICIAR</title>
    <link rel="stylesheet" type="text/css" href="css/loginstyle.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  
  </head>
  <body>
    
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="procesos/login.php" metod="post"class="sign-in-form">
            <h2 class="title">INICIAR SESIÓN</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" name="email" placeholder="Correo" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Contraseña" />
            </div>
                <a href="https://wa.me/51931998025?text=Olvidé%20mi%20contraseña.">¿Te olvidaste tu contraseña?</a>
            <input type="submit" value="INICIAR" class="btn solid" />
            <p class="social-text">Regresar a la página principal</p>
            <div class="social-media">
              <a href="index.php" class="social-icon">
                <i class="fas fa-arrow-left"></i>
              </a>
            </div>
          </form>


          <form action="procesos/registroUsuario.php" method="post" class="sign-up-form" id="register-form">
            <h2 class="title">REGISTRATE</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="dni" id="dni"  placeholder="DNI" pattern="\d{8}" title="Por favor, ingrese un DNI válido de 8 dígitos." maxlength="8"/>
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="nombre" placeholder="Nombre" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" placeholder="Correo" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Contraseña" pattern=".{8,}" title="La contraseña debe contener al menos 8 caracteres" required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="confirm_password" placeholder="Confirmar contraseña" pattern=".{8,}" title="Las contraseñas deben coincidir" required />
            </div>
            <div>
            <input type="checkbox" name="terms" id="terms" required>
            <label for="terms">Acepto los <a href="https://wa.me/51931998025?text=TERMINOS%20Y%20CONDICIONES" target="_blank">términos y condiciones</a></label>
          </div>
          <button type="submit" class="btn solid" >REGISTRAR </button>
            
            <p class="social-text">Regresar a la página principal</p>
            <div class="social-media">
              <a href="index.php" class="social-icon">
                <i class="fas fa-arrow-left"></i>
              </a>
            </div>
          </form>
          <script>
    document.getElementById("register-form").addEventListener("submit", function (event) {
        event.preventDefault();
        const formData = new FormData(event.target);

        fetch("procesos/registroUsuario.php", {
            method: "POST",
            body: formData,
        })
        .then((response) => response.json())
        .then((data) => {
            if (data.status === "success") {
                alert(data.message);
                // Redirigir al usuario a la página de inicio de sesión
                window.location.href = "loginregis.php";
            } else {
                alert(data.message);
            }
        })
        .catch((error) => {
            console.error("Error:", error);
            alert("Ocurrió un error inesperado.");
        });
    });
</script>
        </div>
      </div>
      <div class="panels-container">

        <div class="panel left-panel">
            <div class="content">
                <h3>¿No tienes una cuenta?</h3>
                <p>Dale click, y create una.</p>
                <button class="btn transparent" id="sign-up-btn">CREAR</button>
            </div>
            <img src="./img/log.svg" class="image" alt="">
        </div>

        <div class="panel right-panel">
            <div class="content">
                <h3>¿Quieres iniciar sesión?</h3>
                <p>INICIAR SESIÓN</p>
                <button class="btn transparent" id="sign-in-btn">INICIAR</button>
                
            </div>
            <img src="./img/register.svg" class="image" alt="">
        </div>
      </div>
    </div>
    <?php //include 'incfolinav/footer.php'?>
    <script src="js/loginstyle.js"></script>
  </body>
</html>