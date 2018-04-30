<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css" media="screen" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src = "js/live.js"></script>
    <script src = "JS/slider.js"></script>
  </head>
  <body>
    <div class="barranav">
  <a style="float:left;" href="#home">Página Principal</a>
  <a style="float:left;" href="#news">Noticias</a>
  <a style="float:left;" href="#contact">Contacto</a>
  <a style="float:right;" href="#popup1">Iniciar Sesión</a>
    </div>

    <div class="contenido">
<div id="slider">
  <a href="#" class="control_next">></a>
  <a href="#" class="control_prev"><</a>
  <ul>
    <li><img class="imgs" src="Resources/1.jpg"></li>
    <li><img class="imgs" src="Resources/2.jpg"></li>
    <li><img class="imgs" src="Resources/3.jpg"></li>
    <li><img class="imgs" src="Resources/4.jpg"></li>

  </ul>
</div>

          <div id="popup1" class="overlay">
            <div class="loginpopup">
              <form action="Login.php" method = "Post">
                <center>
                <label>Login AMS</label>
              </center>
                <label for="User">Usuario:</label>
                <input type="text" class="form-control" id = "User" placeholder="Ingrese su usuario" name="User"/>
                <label for="Pass">Contraseña:</label>
                <input type="password" class="form-control" id = "Pass"  placeholder="Ingrese su contraseña" name="Pass"/>
                <br />
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                <a href="" class="btn btn-primary">Cerrar</a>
                <br />
              </form>
            </div>
          </div>

    </div>

  </body>
</html>
