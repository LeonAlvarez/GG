<?php
//inciamos sesion
session_start();
//comprobamos que tengamos el user en sesion
if(!isset($_SESSION['user']))
    header('Location: index.html');
//Si esta logueado
else{
    //SI el campo admin es false ( no es admin)
    if(!$_SESSION['user']['admin']){
        $_SESSION['errores'][] = "Solo el administrador puede borrar";
        header('Location: tabla.php'); 
    }  
} 
require('configDB.php');

$id = $_REQUEST['id'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE  FROM usuarios WHERE id='$id'";
$result = $conn->query($sql);

header('Location: tabla.php');
