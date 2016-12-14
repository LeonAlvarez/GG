<?php   
$codigoGener = $_GET['token'];
$id= $_GET['id'];
?>

<?php


    $conexion=mysqli_connect("localhost","root","","proyectochema") or
die("Problemas con la conexión");

mysqli_query($conexion, "UPDATE `proyectochema`.`usuarios` SET `Usuario_bloqueado` = '0' WHERE `usuarios`.`Usuario_token` = '$codigoGener' AND `usuarios`.`Usuario_id`='$id'") 
    
    or die("Problemas en el select".mysqli_error($conexion));
    echo "El usuario fue dado de alta y debloqueado."
    
        
?>        