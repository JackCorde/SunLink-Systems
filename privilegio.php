<?php
    function permitirAcceso($tipo, $formulario){
        include('inc/conexion.php');
        $result=$conexion->query("CALL consultarPriv( '$tipo', '$formulario')");
        if ($result->num_rows > 0)
        return true;
        else
        return false;
    }
?>