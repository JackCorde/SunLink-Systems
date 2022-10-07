<?php
    session_start();
    session_destroy();
?>

<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" style="image/x-icon" href="img/logo.png">
    <script src="https://kit.fontawesome.com/a85adf3762.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <title>INICIO</title>
    </head>

    <body style="background-image: url(img/fondo.jpg); background-repeat: repeat-x; background-size: cover; background-attachment: fixed; linearGradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)); margin: 0; min-height: 100vh;">

    <div class="navbar-fixed">
        <nav class="transparent z-depth-0 nav-extended" style="background: red;">
            <div class="nav-wrapper">
            <div class="row">
                <div class="col s12" style="padding: 20px;">
                <a href="index.php" class="brand-logo" target="_blank"><img src="img/logo2.1.png" alt="" width="300" height="60"></a>
                <a href="#movile-demo.sidenav" data-target="mobile-demo" class="sidenav-trigger"><i class="medium material-icons" style="color: #E8983E;">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a class="waves-effect waves-light btn-small" style="background: #d6b046; border-radius: 16px;" href="index.php">Inicio</a></li>
                    <li><a class="waves-effect waves-light btn-small" style="background: #d6b046; border-radius: 16px;" href="conocenos.php">Conócenos</a></li>
                    <li><a class="waves-effect waves-light btn-small" style="background: #d6b046; border-radius: 16px;" href="productos.php">Productos</a></li>
                    <li><a class="waves-effect waves-light btn-small" style="background: #d6b046; border-radius: 16px;" href="contactanos.php">Contáctanos</a></li>
                    <li><a class="waves-effect waves-light btn-small" style="background: #d6b046; border-radius: 16px;" href="blog.php">Blog</a></li>
                    <li><a class="waves-effect waves-light btn-large" style="background: #d6b046; border-radius: 16px;" href="login.php">LOGIN</a></li>
                </ul>
                </div>
            </div>
            </div>
        </nav>
    </div>

    <ul class="sidenav" id="mobile-demo">
        <li><a class="waves-effect btn-small" href="index.php">Inicio</a></li>
        <li><a class="waves-effect btn-small" href="conocenos.php">Conócenos</a></li>
        <li><a class="waves-effect btn-small" href="productos.php">Productos</a></li>
        <li><a class="waves-effect btn-small" href="contactanos.php">Contáctanos</a></li>
        <li><a class="waves-effect btn-small" href="blog.php">Blog</a></li>
        <li><a class="waves-effect btn-large" href="login.php">LOGIN</a></li>
    </ul>
    
<br>

<div class="row" align="center">
    
  <div class="col s12">
    <p style="color: rgb(255, 255, 255); font-size: 70px;"><b>EMPRESA LÍDER EN DESARROLLO DE SOFTWARE</b></p>
    <hr width="80%">
    <p style="color: white; font-size: 20px;"><b>LA EMPRESA SUNLINK SYSTEMS ES UNA EMPRESA 100% MEXICANA DEDICADA EL DESARROLLO DE NUEVAS TECNOLOGÍAS PARA SATISFACER LAS NECESIDADES</b></p>
    <br>
    <a class="waves-effect waves-light btn-large" href="alta.php">SUSCRIBIRSE A UN BOLETÍN</a>
    <a class="waves-effect waves-light btn-large" href="baja.php">DARSE DE BAJA DE UN BOLETÍN</a>
  </div>
</div>


      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
        M.AutoInit();
      </script>
        
    </body>
  </html>
