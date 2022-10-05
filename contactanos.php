<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>       
<style>
    body{
    border: 15px solid white;
    position: relative;
    background-image: url(img/imgotipo.png);
    background-repeat: no-repeat;
    background-size: 50%;
    background-position: right;
    width: 100%;
}
    .contenedor{
    position: relative;
    background-repeat: no-repeat;
    background-size: 50% 80%;
    background-position: right;
    
}
.card{

  padding: 1em;

}
.logo{
  background-image: url(img/logo.png);
  background-repeat: no-repeat;
  background-position: left;
}
</style>
</head>
<body>
  
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
        <li><a class="waves-effect btn-small" href="prductos.php">Productos</a></li>
        <li><a class="waves-effect btn-small" href="contactanos.php">Contáctanos</a></li>
        <li><a class="waves-effect btn-small" href="blog.php">Blog</a></li>
        <li><a class="waves-effect btn-large" href="login.php">LOGIN</a></li>
    </ul>
    <br>

  <h1 align="center">Contacto</h1>
  <br>
  <div class="contenedor">
  <div class="row">
    <div class="col s"></div>
    <div class="col s4">
      <div class="card #eeeeee grey lighten-3">
        <ul>
          <li><a class="btn btn-floating pulse"><i class="samll material-icons">contact_phone</i></a>55-67-42-16-83</li><br>
          <li><a class="btn btn-floating pulse"><i class="small material-icons">contact_mail</i></a>sunlinks@host.hddpool5.net</li><br>
          <li><a class="btn btn-floating pulse"><i class="small material-icons">access_time</i></a>Horario de atencion</li><br>
           <li align="center">Lunes a viernes de 08:00 - 16:00 hrs
            <br> Sábado de 08:00 - 14:00 hrs</li>
          <li>Redes sociales</li><br>
          <li align="center">Facebook: SUNLINK SYSTEM LTD</li><br>
          <li align="center">Instagram: @SUNLINK SYSTEM LTD</li><br>
        </ul>
      </div>
    </div>
  <div class="col s1"></div>
  <div class="col s6">
    <div class="card #eeeeee grey lighten-3" >
      <ul>
        <li><a class="btn btn-floating pulse"><i class="samll material-icons">place</i></a>  Camino, Real San Mateo S/N, 74169 Santa Ana Xalmimilulco, Pue</li>
      </ul>
    </div>
    <div class="fa-solid fa-map-location">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7535.373487311766!2d-98.3926336!3d19.2088798!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfd1f35ec2d3fb%3A0xee133cee4b1c87ef!2sUniversidad%20Tecnol%C3%B3gica%20de%20Huejotzingo!5e0!3m2!1ses!2smx!4v1664730834539!5m2!1ses!2smx" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
</div>
<img src="img/logo.png" width="25%">
</div>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        M.AutoInit();
    </script>
</body>
</html>
