<?php
//inciamos sesion
session_start();
//comprobamos que tengamos el user en sesion
if(!isset($_SESSION['user']))
    header('Location: index.html');

require('configDB.php');
$ids = isset($_REQUEST['marcarEliminar'])? implode(",",$_REQUEST['marcarEliminar']) : null;

//var_dump($ids);
$sql=null;
if($ids)
    $sql = "DELETE  FROM fotos_usuario WHERE id IN ($ids)";

if($sql) {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $result = $conn->query($sql);
}

header('Location: tabla.php');
