<?php

session_start();
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
$condicion = [];
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

$condicion = implode(" AND ", $condicion);


if($condicion!="")
    $sql = $sql." WHERE ".$condicion;   

$result = $conn->query($sql); ?>

<form action="tabla.php">
    <input type="text" name="id" value="">
    <input type="text" name="nombre" value="">
    <input type="text" name="apellido1" value="">
    <input type="text" name="apellido2" value="">
    <button type="submit">Buscar</button>
</form>

<table width="50%" style="text-align:center;"> 
    <thead>
        <th>id</th>
        <th>nombre</th>
        <th>apellido1</th>
        <th>apellido2</th> 
        <th>editar</th>
        <th>borrar</th>       
    </thead>
    <tbody>
    <?php if ($result->num_rows > 0) {
    // output data of each row
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

