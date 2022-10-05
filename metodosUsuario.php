<?php
    include('inc/mensaje.php');
    include('inc/conexion.php');

    $opcion=$_REQUEST['opcion'];

    switch($opcion){
        
        case "1":
            	include('inc/conexion.php');
                $nom=$_REQUEST['nom'];
                $ap=$_REQUEST['ap'];
                $correo=$_REQUEST['correo'];
                $sql="CALL agregarUsuario('$nom','$ap', '$correo')";
                $consulta=$conexion->query($sql);
                if($fila=mysqli_fetch_array($consulta)){
                    mensaje($fila[0], "index.php");
                }
                else{
                    mensaje($fila[0], "index.php");
                }
        break;
            
        break;
        case "2":
            $correo=$_REQUEST['correo'];
            $motiv=$_REQUEST['motiv'];
            
            $sql="CALL inhabilitarUsuario('$motiv', '$correo')";
            $consulta=$conexion->query($sql);
            if($fila=mysqli_fetch_array($consulta)){
                mensaje($fila[0], "baja.php");
            }
            else{
                mensaje($fila[0], "baja.php");
            }
        break;
        case "3":
            $correo=$_REQUEST['correo'];
            $clave=generar();
            $sql="SELECT * FROM admin WHERE admin.correo='$correo'";
            
            $consulta=$conexion->query($sql);
            if ($fila=mysqli_fetch_array($consulta)){
                correo($fila[1], $clave);
                include('inc/conexion.php');
                $sql1="CALL recuperarPass('$fila[1]', '$clave')";
                $consulta1=$conexion->query($sql1);
                if($fila1=mysqli_fetch_array($consulta1)){
                    mensaje("$fila1[0]","index.php");
                }
            }
            else{
                mensaje("Correo no registrado", "recuperacion.php");
            }
        break;
    }

    function correo($correo, $password){
        $msg="Usuario: ".$correo."\n Contraseña: ".$password;
        mail($correo, "SunLink Systems", $msg);
        mensaje("Contraseña enviada", "index.php");
    }
    
    function generar(){
        $cadena_base='ABCDEFGHIJKLMNOPQRSTVWXYZabdefghijklmnopqrstuvwxyz';
        $cadena_base .= '0123456789';
        $password= '';
        $limite=strlen($cadena_base) - 1;
    
        for($i=0; $i<10; $i++)
        $password .= $cadena_base[rand(0, $limite)];
        return $password;
    }

?>