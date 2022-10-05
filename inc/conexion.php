<?php

$conexion = new mysqli("localhost","root", "", "sunlinksystems");
    mysqli_set_charset($conexion,"utf8");

if($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (".$conexion_connect_errno.") ".$conexion->connect_error;
}

?>