<?php
//inciamos sesion
session_start();
//comprobamos que tengamos el user en sesion
if(!isset($_SESSION['user']))
    header('Location: index.html');
//Si esta logueado
else{
    //SI el usuario no es admin ( campo admin es falso)
    if(!$_SESSION['user']['admin']){
        //SI el id quue le pasamos para editar es distinto al del user volvemos a la tabla
        if($_SESSION['user']['id']!=$_REQUEST['id']){
            $_SESSION['errores'][] = "No tienes permiso para editar a otro usuario";
            header('Location: tabla.php');
        }
        //Sino sigue y se edita a el mismo
    }
}
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