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
    <title>FORMULARIO DE ALTA</title>
    </head>

    <body class="alta" style="background-image: url(img/fondo2.png); background-repeat: repeat-x; background-size: cover; background-attachment: fixed; margin: 0; min-height: 100vh;">

      <br>
     <form class="form" action="metodosUsuario.php" name="agregar" method="post">
     <div class="row" align="center">
       <input type="hidden" name="opcion" value="1">
       <div class="col s12" align="center">
        <br><br>
         <img src="img/logo2.1.png" alt="" width="300" height="60">
         <br>
         <h3>Suscribete a nuestro boletín</h3>
         <br>
         <div class="input-field col s12">
          <textarea id="nom" name="nom" class="materialize-textarea" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ ]+"></textarea>
          <label for="nom">NOMBRE(S)</label>
        </div>
        <br>
        <div class="input-field col s12">
          <textarea id="ap" name="ap" class="materialize-textarea" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ ]+"></textarea>
          <label for="ap">PRIMER APELLIDO</label>
        </div>
        <br>
        <div class="input-field col s12">
          <textarea type="email" id="correo" name="correo" class="materialize-textarea" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ ]+"></textarea>
          <label for="correo">EMAIL</label>
        </div>
        <br>
        <p>
      <label>
        <input type="checkbox" required/>
        <span>Acepto términos y condiciones</span>
      </label>
    </p>

      <br>
      <input type="submit" id="btn" class="waves-effect waves-light btn-large" name="agregar" value="SUSCRIBIRSE">
      <a class="waves-effect waves-light btn-large" href="index.php">REGRESAR</a>
      <br>
       </div>

     </div>
           </form>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
