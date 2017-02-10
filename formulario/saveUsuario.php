<?php
session_start();
include_once("UsuarioCollector.php");
	$id_usuario = $_POST['id_usuario'];
	/*$id_persona = $_POST['id_persona'];*/
	$usuario = $_POST['usuario'];
	$clave = $_POST['clave'];
	/*$fecha_registro = $_POST['registro'];*/



$DemoCollectorObj = new UsuarioCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link href="estilo.css" rel="stylesheet">
    	
    
    </head>
    <body>
  
        <?php
        echo "<p>EL USUARIO SE INGRESO CORRECTAMENTE</p>";
        $DemoCollectorObj->createUsuario($usuario, $clave);
        
        ?>
        
       <button><a href="readUsuario.php">VOLVER</a></button>
  
    </body>
</html>
