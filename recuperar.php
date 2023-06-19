<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <script src="./js/scrollreveal.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="./css/inicio.css">

    <link rel="icon" href="">
    <title>Recuperar Contraseña</title>
</head>
<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        
        <a class="navbar-brand" href="index.php">Bastimento</a>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active" style="margin: 0px 10px;">
              <a type="bottom" class="btn btn-success" href="registrar.php">Registarse</a>
              <a type="bottom" class="btn btn-primary" href="iniciar.php">Iniciar Sesion</a>
            </li>
          </ul>
        </div>
      </nav>
  </header>

            <div class="row" style="width: 60%; margin: auto; padding: 5%;">
              <center><h2>Recuperar Contraseña</h2></center>
              <div class="col" style="margin: 5% 5% 5% 5%; border-radius: 3rem; background: whitesmoke;">
                <form class="login-form" action="./include/ingresar.php" method="POST">
                  
                  <div style="padding: 10px;">
                    <label for="email">Email:</label>
                    <input class="form-control" type="text" name="email" id="email" placeholder="Ingrese su Email" maxlength="20" required>
                  </div>

                  <div style="padding: 10px;">
                    <label for="password">Contraseña:</label>
                    <input class="form-control" type="password" name="password" id="password" placeholder="Ingrese su Contraseña" maxlength="12" required>
                    <input type="hidden" name="accion" value="acceso_user">
                  </div>
                  <br>
                  <a href="recuperar.php">¿Olvidaste tu contraseña?</a>
                  <center>
                    <input type="submit" class="btn btn-primary" value="Ingresar">
                  </center>
                  <br>
                    <center><a href="registar.php">¿No tienes una cuenta? Registrate.</a></center>
                </form>
                
              </div>

            </div>

        <script>
            function validation() {  
            var id=document.f1.email.value;  
            var ps=document.f1.password.value;  
            if(id.length=="" && ps.length=="") {  
              alert("Los campos estan vacios");  
              return false;  
            }else {  
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

    <script>
      window.sr = ScrollReveal();
      sr.reveal('.row', {
      duration: 2000,
      origin: 'bottom',
      distance: '300px'
      });
    </script>

    <footer>
      <center><p>© Bastimento</p></center>
    </footer>

</body>
</html>