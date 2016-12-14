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
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM usuarios WHERE id='$id'";

$result = $conn->query($sql);
$user = $result->fetch_assoc();

?>
<form action="actualizar.php">
    <label for="nombre">Nombre </label>
    <input type="text" name="nombre" value="<?=$user['nombre']?>">
    <label for="apellido1">Primer Apellido </label> 
    <input type="text" name="apellido1" value="<?=$user['apellido1']?>">
    <label for="apellido2">Segundo Apellido </label>
    <input type="text" name="apellido2" value="<?=$user['apellido2']?>">
    <input type="hidden" name="id" value="<?=$user['id']?>">
    <button type="submit">Editar</button>
</form>


