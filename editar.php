<?php

session_start();
if(!isset($_SESSION['user']))
    header('Location: index.html');


require('configDB.php');

$id = $_REQUEST['id'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM usuarios WHERE id='$id'";

$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>
<form action="actualizar.php">
    <label for="nombre">Email </label>
    <input type="text" name="nombre" value="<?=$row['nombre']?>">
    <label for="apellido1">Email </label>
    <input type="text" name="apellido1" value="<?=$row['apellido1']?>">
    <label for="apellido2">Email </label>
    <input type="text" name="apellido2" value="<?=$row['apellido2']?>">
    <input type="hidden" name="id" value="<?=$row['id']?>">
    <button type="submit">Editar</button>
</form>


