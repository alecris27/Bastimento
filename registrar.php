<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.112.5">
    <title>Registrar Empleado</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">

    <link rel="stylesheet" type="text/css" href="./css/Bootstrap.min(2).css">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }
    </style> 
</head>
<body class="bg-body-tertiary">

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="index.php">Bastimento</a>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active" style="margin: 0px 10px;">
              <a type="bottom" class="btn btn-success" href="registrarse.php">Registarse</a>
            </li>
            <li>
              <a type="bottom" class="btn btn-primary" href="iniciar.php">Iniciar Sesion</a>
            </li>
          </ul>
        </div>
    </nav>
    
  <div class="container">
    <main>
      <div style="margin: 10% 30% 0px 35%;">
        <center><h2>Registrar Empelado</h2></center>
        <hr>
      </div>
      <div class="row g-5" style="justify-content: center;">
        <div class="col-md-7 col-lg-8" style="margin: 25px 0px 20px 0px; background: lightgrey; border-radius: 3rem; padding: 30px;">
          <form class="form" action="./include/registrar-empleado.php" method="POST">

            <div class="form-row" style="padding: 25px 0px;">
              <div class="col" style="padding: 0px 25px 0px 0px;">
                <label for="nombre_apellido">Nombre y Apellido:</label>
                <input class="form-control" type="text" name="nombre_apellido" placeholder="Nombre y apellido" maxlength="30" required>
              </div>

              <div class="col" style="padding: 0px 25px 0px 0px;">
                <label for="nombre_apellido">Cedula de Identidad:</label>
                <input class="form-control" type="text" name="cedula" placeholder="Cedula de Identidad" maxlength="10"  required>
              </div>
            
              <div class="col">
                <label for="nombre_apellido">Telefono:</label>
                <input class="form-control" type="text" name="telefono" placeholder="Telefono" maxlength="13"  required>
              </div>

            </div>

            <div class="form-row">
              <div class="col" style="padding: 25px 20px 0px 0px;">
                <label for="email">Email:</label>
                <input class="form-control" type="email" name="email" placeholder="Email" maxlength="30" required>
              </div>

              <div class="col" style="padding: 25px 0px 0px 16px;">
                <label for="email">Confirme su Email:</label>
                <input class="form-control" type="email" name="email" placeholder="Confirme su Email" maxlength="30">
              </div>
            </div>

            <div class="form-row">
              <div class="col" style="padding: 25px 20px 0px 0px;">
                <label for="password">Constraseña:</label>
                <input class="form-control" type="password" name="password" placeholder="Contraseña" maxlength="12"  required>
              </div>

              <div class="col" style="padding: 25px 0px 0px 16px;">
                <label for="password">Confirme su contraseña:</label>
                <input class="form-control" type="password" name="password" placeholder="Confirme su Contraseña" maxlength="12">
              </div>
            </div>
            <hr>
            <center>
              <input type="submit" class="btn btn-primary" name="Registrar" value="Registrar">
            </center>
            <br>
            <center>
              <a href="iniciar.php">¿Ya tienes cuenta? Inicia Sesion.</a>
            </center>
          </form>
        </div>
      </div>
    </main>

  </div>

  <script>  
            function validation()  
            {  
              var id=document.f1.nombre_apellido.value; 
                var id=document.f1.cedula.value; 
                var id=document.f1.telefono.value;
                var id=document.f1.email.value; 
                var ps=document.f1.password.value;
                if(id.length=="" && ps.length=="") {  
                    alert("Los campos estan vacios");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("El campo de Email esta vacio");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("El campo de Contraseña esta vacio");  
                    return false;  
                    }  
                }                             
            }  
    </script>

  <footer style="clear: both;
   padding: 20px 10px 20px;
   margin: auto; 
   left: 0;
   width: 100%;
   background-color: #212529;
   color: darkgrey;
   text-align: center;">
      <center><p>© Bastimento</p></center>
  </footer>


  <script src="./js/scrollreveal.min.js"></script>

  <script>
      window.sr = ScrollReveal();
      sr.reveal('.container', {
      duration: 2000,
      origin: 'top',
      distance: '300px'
      });
  </script>


</body>
</html>
