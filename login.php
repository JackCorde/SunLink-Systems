<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/index.css">
    <title>Login</title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col s5"><img src="img/logo2.png" alt="" width="100%" height="100%"></div>
            <div class="col s7"></div>
        </div>
        <div class="row">
            <div class="col s1"></div>
            <div class="col s10"><center><img src="img/account.png" alt="" width="20%" height="20%"></div></center></div>
            <div class="col s1"></div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col s3"></div>
            <div class="col s6">
                <form class="row g-3" method="get" action="validar.php" name="login" >
                    <div class="col-md-12">
                        <label for="email" class="form-label">Correo Electronico</label>
                        <div class="input-group">
                        <input type="text" class="form-control" id="email" name="email" aria-describedby="inputGroupPrepend2" placeholder="ejemplo@gmail.com" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" maxlength="15" required>
                    </div><br>
                    <div class="row">
                        <div class="col s6">
                            <center><input type="submit" id="btn" class="btn btn-primary button" name="iniciar" value="Iniciar Sesion"></center>
                        </div>
                </form>
                        <div class="col s6">
                            <center><a href="index.php"><button class="btn btn-primary button" type="button">Cancelar</button></a></center>
                        </div>
                    </div><br>
                <center><a href="recuperarCont.php"><button class="btn btn-primary button" type="submit">¿Olvidaste tu contraseña?</button></a></center>
            </div>
            <div class="col s3"></div>
        </div>
    </div>

    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
