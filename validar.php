<?php
    session_start();
    include('inc/mensaje.php');
    include('inc/conexion.php');

    $correo=$_REQUEST['email'];
    $password=$_REQUEST['password'];

    $sql="SELECT * FROM admin, usuarios WHERE admin.correo='$correo' AND admin.contras = '$password' AND admin.correo=usuarios.correo";

    $consulta=$conexion->query($sql);

    if($resultado=mysqli_fetch_array($consulta)){
        $_SESSION['correo']=$resultado[1];
        $_SESSION['tipoUsuario']=$resultado[5];
        header('Location:indexAdmin.php');
    }
    else{
        mensaje('Usuario o contraseña invalida', 'login.php');
    }
?>