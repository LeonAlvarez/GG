<?php
//inciamos sesion
session_start();
//comprobamos que tengamos el user en sesion
if(!isset($_SESSION['user']))
    header('Location: index.html');

//cargamos los errores desde la session
$errores = isset($_SESSION['errores']) ? $_SESSION['errores']: null;
//una vez guardados los errores , hacemos unset() para eliminar la variable errores de la seson
//Sino iriamos acumulando los errores y se mostrarian en todas las paginas aunque ya no esten
unset($_SESSION['errores']);

// Create connection
require('configDB.php');
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$condicion = null;

// la query con la relacion entre Usuarios y Pais
$sql = "SELECT usuarios.id AS id , nombre ,apellido1, apellido2 , country.nicename AS pais 
FROM usuarios , country WHERE country.id =id_pais ";

// //mostramos el lso datos del request para enseñarlo
// var_dump($_REQUEST);

$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;
$nombre = isset($_REQUEST['nombre']) ? $_REQUEST['nombre'] : null;
$apellido1 = isset($_REQUEST['apellido1']) ? $_REQUEST['apellido1'] : null;
$apellido2 = isset($_REQUEST['apellido2']) ? $_REQUEST['apellido2'] : null;
$pais = isset($_REQUEST['pais']) ? $_REQUEST['pais'] : null;

if($id!=null)
    $condicion[] = "id='$id'";
if($nombre!=null)
    $condicion[] = "nombre='$nombre'";
if($apellido1!=null)
    $condicion[] = "apellido1='$apellido1'";
if($apellido2!=null)
    $condicion[] = "apellido2='$apellido2'";
if($pais!=null)
    $condicion[] = "id_pais='$pais'";

if($condicion!=null){      
    $condicion = implode(" AND ", $condicion);
    $sql = $sql." WHERE ".$condicion;  
}

////para mostrar la query y depurar
//var_dump($sql); 

$result = $conn->query($sql); 
//Recogemos el resultado de la query en $usuarios
//(sera un array donde cada elemento sera tmb un array con los campos de las columnas de la tabla)
$usuarios = mysqli_fetch_all($result,MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Administracion de Usuario</title>
</head>
<body>
    <!--Codigo para mostrar los errores-->
    <?php if($errores) {?>
        <ul style="color:red;">
            <?php foreach($errores as $error){?>
            <li><?=$error?></li>
            <?php }?>
        </ul>
    <?php }?>

    <!--Codigo tabla-->
    <table width="100%" style="text-align:center;" border="1"> 
    <!--Cabecera tabla-->
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>apellido1</th>
                <th>apellido2</th> 
                <th>pais</th>
                <th>editar</th>
                <th>borrar</th>      
            </tr> 
            <tr>
                <!--formulario para buscar en las cabeceras de la tabla -->
                <form action="tabla.php">
                    <th><input type="text" name="id" value=""></th>
                    <th><input type="text" name="nombre" value=""></th>
                    <th><input type="text" name="apellido1" value=""></th>
                    <th><input type="text" name="apellido2" value=""></th>
                    <th><input type="text" name="pais" value=""></th>
                    <th colspan="2"><button type="submit">Buscar</button></th>
                </form>
            </tr> 
        </thead>
        <tbody>        
         <!--por cada fila de la consulta cremos una fila en la tabla-->
        <?php 
            //Para cada $user en $usuarios
            // for($i=0 ; i<count($usuarios))
            foreach($usuarios as $user) {         
        ?>
            <tr>
                <td><?=$user['id']?></td>
                <td><?=$user['nombre']?></td>
                <td><?=$user['apellido1']?></td> 
                <td><?=$user['apellido2']?></td>
                <td><?=$user['pais']?></td>
                <td><a href="editar.php?id=<?=$user['id']?>">Editar</a></td>
                <td><a href="borrar.php?id=<?=$user['id']?>">Borrar</a></td>
            </tr>
        <?php } ?>        
        </tbody>
    </table>

    <a href="logout.php">Salirse</a>
</body>
</html>


