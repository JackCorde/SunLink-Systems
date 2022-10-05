<?php 
   session_start();
    include('privilegio.php');
    if(permitirAcceso($_SESSION['tipoUsuario'], 'usuariosInactivos')){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=PT+Sans+Caption&family=Roboto:ital,wght@0,300;1,500;1,900&family=Shadows+Into+Light&family=The+Nautigal:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/eef980f98b.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/index.css">
    <title>Administrador</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col s5"><img src="img/logo2.png" alt="" width="100%" height="100%"></div><br>
            <div class="col s7"><h1 style="font-size: 160%; text-align: right;">ADMINISTRADOR</h1></div>
        </div>

    <div class="navbar">
        <nav class="transparent z-depth-0 nav-extended" style="background: red;">
            <div class="nav-wrapper">
            <div class="row">
                <div class="col s12" style="padding: 20px;">
                <a href="#movile-demo.sidenav" data-target="mobile-demo" class="sidenav-trigger"><i class="medium material-icons" style="color: #E8983E;">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a class="waves-effect waves-light btn-small" style="background: #FFF1FD; border-radius: 16px; color:black" href="indexAdmin.php">Usuarios Activos</a></li>
                    <li><a class="waves-effect waves-light btn-small" style="background: #FFF1FD; border-radius: 16px; color:black" href="usuariosInactivos.php">Usuarios Inactivos</a></li>
                    <li><a class="waves-effect waves-light btn-small" style="background: #FFF1FD; border-radius: 16px; color:black" href="contratos.php">Contratos</a></li>
                    <li><a class="waves-effect waves-light btn-large" style="background: #d6b046; border-radius: 16px;" href="cierre_sesion.php">Cerrar Sesion</a></li>
                </ul>
                </div>
            </div>
            </div>
        </nav>
    </div>
    <ul class="sidenav" id="mobile-demo">
        <li><a class="waves-effect btn-small" href="indexAdmin.php">Usuarios Activos</a></li>
        <li><a class="waves-effect btn-small" href="usuariosInactivos.php">Usuarios Inactivos</a></li>
        <li><a class="waves-effect btn-small" href="contratos.php">Contratos</a></li>
        <li><a class="waves-effect btn-large" href="cierre_sesion.php">Cerrar Sesion</a></li>
    </ul>
    </div>

    <div class="container">
    <h1 style="font-size: 300%; text-align:center">Información de Usuarios Inactivos</h1><br>

        <div class="row">
            <div class="col-1"></div>
            <div class="col-10 table-responsive">
                <table class="table table-hover" style="width: 100%;">
                    <thead>
                        <tr>
                        <th scope="col" style="width: 5%; text-align:center">#</th>
                        <th scope="col" style="width: 25%; text-align:center">Nombre</th>
                        <th scope="col" style="width: 20%; text-align:center">Apellido Paterno</th>
                        <th scope="col" style="width: 30%; text-align:center">Correo Electronico</th>
                        <th scope="col" style="width: 30%; text-align:center">Ver</th>
                        </tr>
                    </thead>
                    <tbody style="text-align: center;">
                      <?php
                        include('inc/mensaje.php');
                        include('inc/conexion.php');
                        $num=0;

                        $sql="SELECT * FROM usuarios WHERE usuarios.habilitado=False";
                        $consulta=$conexion->query($sql);

                        while($fila=mysqli_fetch_array($consulta)){
                            $num++;
                            echo "<tr><td>".$num."</td>";
                            echo "<td>".$fila[3]."</td>";
                            echo "<td>".$fila[4]."</td>";
                            echo "<td>".$fila[1]."</td>";
                            echo "<td><a href='verUsuario.php?correo=".$fila[1]."' style='color:black'><i class='fa-solid fa-eye'></i></a></td></tr>";
                        }
                    ?>
                    </tbody>
                </table>
            </div>
            <div class="col-1"></div>
        </div>
    </div><br><br>

    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
<?php
   }
    else{
        header('Location:index.php');
    }

 ?>