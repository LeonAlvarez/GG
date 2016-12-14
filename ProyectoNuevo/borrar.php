<?php   
$id= $_GET['id'];
?>

    <?php require('menu.php');?>
<?php


    $conexion=mysqli_connect("localhost","root","","proyectochema") or
die("Problemas con la conexión");
$sql =  "DELETE FROM usuarios  WHERE Usuario_id = '{$id}' ";


mysqli_query($conexion,$sql) 
    
    or die("Problemas en el select".mysqli_error($conexion));
    echo "El usuario ha sido borrado."
    
        
?>        