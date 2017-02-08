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
$ids = isset($_REQUEST['marcarEliminar'])? implode(",",$_REQUEST['marcarEliminar']) : null;
$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : null ;
//var_dump($ids);
$sql=null;
if($id)
    $sql = "DELETE  FROM usuarios WHERE id=$id";
if($ids)
    $sql = "DELETE  FROM usuarios WHERE id IN ($ids)";

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
