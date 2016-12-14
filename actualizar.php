<?php

require('configDB.php');

$id = $_REQUEST['id'];
$nombre = $_REQUEST['nombre'];
$apellido1 = $_REQUEST['apellido1'];
$apellido2 = $_REQUEST['apellido2'];
$pais = $_REQUEST['pais'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE usuarios SET nombre='$nombre' , apellido1='$apellido1' , apellido2='$apellido2' , id_pais='$pais' WHERE id='$id'";
$conn->query($sql);

header('Location: tabla.php');
?>