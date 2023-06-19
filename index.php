
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/carousel/">

    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="./ejemplo_files/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="./ejemplo_files/carousel.css" rel="stylesheet">

    <link rel="icon" href="">

    <title>Bastimento C.A | Prototipo</title>
</head> 
<style>
  body{
    background: lightyellow;
  }

  .modal {
    display: none; /* Ocultar por defecto */
    position: fixed; /* Posición fija */
    z-index: 1; /* Arriba de todo */
    left: 0;
    top: 0;
    width: 100%; /* Ancho completo */
    height: 100%; /* Alto completo */
    overflow: auto; /* Habilitar scroll */
    background-color: rgba(0,0,0,0.4); /* Color de fondo con transparencia */
  }

  /* Estilos para el contenido del pop-up */
  .modal-content {
    animation-name: fadeIn;
    animation-duration: 0.5s;
    background-color: #fefefe;
    margin: 11% auto; /* Centrar vertical y horizontalmente */
    padding: 20px;
    border: 1px solid #888;
    width: 40%; /* Ancho del pop-up */
  }


  /* Definir la animación de desvanecimiento */
  @keyframes fadeIn {
    from {opacity: 0;}
    to {opacity: 1;}
  }

  /* Estilos para el botón de cerrar el pop-up */
  .close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
  }

  /* Estilos para el formulario de login */
  .login-form {
    display: flex;
    flex-direction: column;
  }

  .login-form input {
    margin-bottom: 10px;
  }

  .login-form button {
    width: fit-content;
  }
</style>
<body>

  <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="index.php">Bastimento</a>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active" style="margin: 0px 10px;">
              <a type="bottom" class="btn btn-success" href="registrar.php">Registrarse</a>
            </li>
            <li>
              <button id="myBtn" class="btn btn-primary">Iniciar Sesion</button>
            <!---Pestaña de inicio de sesion---->
            <div id="myModal" class="modal">
              <!-- Contenido del pop-up -->
              <div class="modal-content">
                <span class="close">x</span>
                
                <center><h3>Iniciar Sesion</h3></center>
                <!-- Formulario de login -->
                <form id="login-form" class="login-form" action="./include/ingresar.php" method="POST">
                  
                  <label for="email">Email:</label>
                  <input class="form-control" type="text" name="email" id="email" placeholder="Ingrese su Email" maxlength="20" required>

                  <label for="password">Contraseña:</label>
                  <input class="form-control" type="password" name="password" id="password" placeholder="Ingrese su Contraseña" maxlength="12" required>
                  <input type="hidden" name="accion" value="acceso_user">

                  <a href="recuperar.php">¿Olvidaste tu contraseña?</a>
                  <hr>
                  <center>
                    <input type="submit" class="btn btn-primary" value="Ingresar">
                  </center>
                  
                  <center>
                    <p><a href="registrar.php">¿No tienes una cuenta? Registrate.</a></p>
                  </center>
                </form>
                <!-- Mensaje de éxito o error -->
                
              </div>
            </div>
            </li>
          </ul>
        </div>
      </nav>
  </header>

  <main role="main">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class=""></li>
          <li data-target="#myCarousel" data-slide-to="1" class=""></li>
          <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item">
            <img class="first-slide" src="./img/1.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Bienvenido</h1>
                <p>¡Sea bienvenido al Restaurante Bastimento! </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="./img/6.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Checa nuestro Menu</h1>
                <p>Te ofrecemos varios opciones para tus gustos</p>
                <p><a class="btn btn-lg btn-primary" href="Menu.html">Ver Menu</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item active">
            <img class="third-slide" src="./img/4.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>¡Disfruta!</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="container marketing">

        <!--Vistas -->
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading"> Aqui podras encontrarnos!</h2>
            <p class="lead">Estamos abiertos de 8 AM hasta las 4 PM, de Lunes a Sabado.</p>
          </div>
          <!---Mapa-->
          <div class="col-md-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d981.6084685713778!2d-67.32821077850417!3d10.22654785790787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x8c2a9e865c26ba57%3A0x9559d0d511669c5!2sC.C.%20La%20Uni%C3%B3n%2C%206MGC%2BGP6%2C%20La%20Victoria%202121%2C%20Aragua!3m2!1d10.2262791!2d-67.32824339999999!5e0!3m2!1ses-419!2sve!4v1664939349577!5m2!1ses-419!2sve" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Echa un vistazo a nuestro Menú</h2>
            <p class="lead">Te ofrecemos variades de platillos</p>
            <p><a class="btn btn-secondary" href="Menu.html" role="button">Ver Menu »</a></p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1883b21e41f%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1883b21e41f%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22185.1171875%22%20y%3D%22261.1%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 500px; height: 500px;">
          </div>
        </div>
        
    </div>

  </main>
  <br>
  <footer class="container">
    <center><p>© Bastimento C.A - 2023</p></center>
  </footer>

    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./ejemplo_files/jquery-3.2.1.slim.min.js.descarga" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="./js/jquery-slim.min.js"><\/script>')</script>
    <script src="./ejemplo_files/popper.min.js.descarga"></script>
    <script src="./ejemplo_files/bootstrap.min.js.descarga"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="./ejemplo_files/holder.min.js.descarga"></script>
    
    <script>
      // Obtener el modal
      var modal = document.getElementById("myModal");

      // Obtener el botón que abre el modal
      var btn = document.getElementById("myBtn");

      // Obtener el elemento <span> que cierra el modal
      var span = document.getElementsByClassName("close")[0];

      // Obtener el formulario de login
      var form = document.getElementById("login-form");

      // Obtener el elemento <p> que muestra el mensaje
      var message = document.getElementById("message");

      // Cuando el usuario hace clic en el botón, abrir el modal 
      btn.onclick = function() {
        modal.style.display = "block";
      }

      // Cuando el usuario hace clic en <span> (x), cerrar el modal
      span.onclick = function() {
        modal.style.display = "none";
      }

      // Cuando el usuario hace clic en cualquier lugar fuera del modal, cerrar el modal
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }

    </script>

    <svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" viewBox="0 0 500 500" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;">
        <defs>
          <style type="text/css"></style>
        </defs>
        <text x="0" y="25" style="font-weight:bold;font-size:25pt; font-family:Arial, Helvetica, Open Sans, sans-serif">500x500</text>
    </svg>

</body>
</html>