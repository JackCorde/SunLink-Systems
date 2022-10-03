<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/index.css">
    <title>Recuperar Contraseña</title>
</head>
<body class="backAdmin"><br><br><br>
    <h1 style="font-size: 350%; text-align:center">Recuperar Contraseña</h1><br><br>
    <p style="font-size: 150%; text-align:center">Escribe el correo electronico que registraste</p><br>

    <div class="container">
        <div class="row">
            <div class="col s3"></div>
            <div class="col s6">
                <form action="metodosUsuario.php" name="recuperar" method="post">
                    <input type="hidden" name="opcion" value="1">
                    <div class="col-md-12">
                        <label for="validationDefaultUsername" class="form-label">Correo Electronico</label>
                        <div class="input-group">
                        <input type="text" class="form-control" id="validationDefaultUsername" name="validationDefaultUsername" placeholder="ejemplo@gmail.com" aria-describedby="inputGroupPrepend2" required>
                        </div>
                    </div><br><br>
                    <div class="row">
                        <div class="col s6">
                            <center><button class="btn btn-primary button" type="submit" name="recuperar">Enviar</button></center>
                        </div>
                </form>
                        <div class="col s6">
                            <center><a href="login.php"><button class="btn btn-primary button" type="button">Cancelar</button></a></center>
                        </div>
                    </div>
            </div>
            <div class="col s3"></div>
        </div>
    </div>

    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>