<?php
//inciamos sesion
session_start();
//comprobamos que tengamos el user en sesion
if(!isset($_SESSION['user']))
    header('Location: index.html');

require('configDB.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//header('Location: error.php'); para redirigir
$condicion = null;

$sql = "SELECT * FROM usuarios ";

$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;
$nombre = isset($_REQUEST['nombre']) ? $_REQUEST['nombre'] : null;
$apellido1 = isset($_REQUEST['apellido1']) ? $_REQUEST['apellido1'] : null;
$apellido2 = isset($_REQUEST['apellido2']) ? $_REQUEST['apellido2'] : null;

if($id!=null)
    $condicion[] = "id='$id'";
if($nombre!=null)
    $condicion[] = "nombre='$nombre'";
if($apellido1!=null)
    $condicion[] = "apellido1='$apellido1'";
if($apellido2!=null)
    $condicion[] = "apellido2='$apellido2'";

if($condicion!=null){      
    $condicion = implode(" AND ", $condicion);
    $sql = $sql." WHERE ".$condicion;  
}
   
$result = $conn->query($sql); ?>

<table width="100%" style="text-align:center;" border="1"> 
    <thead>
        <tr>
            <th>id</th>
            <th>nombre</th>
            <th>apellido1</th>
            <th>apellido2</th> 
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
                <th colspan="2"><button type="submit">Buscar</button></th></th>
            </form>
        </tr> 
    </thead>
    <tbody>
    <!--Si almenos 1 resultado en la query-->
    <?php if ($result->num_rows > 0) {
    // por cada fila de la consulta cremos una fila en la tabla
    while($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?=$row['id']?></td>
            <td><?=$row['nombre']?></td>
            <td><?=$row['apellido1']?></td> 
            <td><?=$row['apellido2']?></td>
            <td><a href="editar.php?id=<?=$row['id']?>">Editar</a></td>
            <td><a href="borrar.php?id=<?=$row['id']?>">Borrar</a></td>
        </tr>
    <?php } 
    }?>
    
    </tbody>
</table>

<a href="logout.php">Salirse</a>

