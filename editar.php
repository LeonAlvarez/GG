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

//$sql = "SELECT * FROM usuarios WHERE id='$id'"; 
$sql = "SELECT usuarios.id AS id , nombre ,apellido1, apellido2 , country.nicename AS pais 
FROM usuarios , country WHERE country.id =id_pais AND usuarios.id='$id'";

//var_dump($sql);

$result = $conn->query($sql);
$user = $result->fetch_assoc();

//cogemos todos los paises
$sql = "SELECT * FROM country ";   
$result = $conn->query($sql);
$paises = mysqli_fetch_all($result,MYSQLI_ASSOC);

?>
<form action="actualizar.php">
    <label for="nombre">Nombre </label>
    <input type="text" name="nombre" value="<?=$user['nombre']?>">
    <label for="apellido1">Primer Apellido </label> 
    <input type="text" name="apellido1" value="<?=$user['apellido1']?>">
    <label for="apellido2">Segundo Apellido </label>
    <input type="text" name="apellido2" value="<?=$user['apellido2']?>">
    <input type="hidden" name="id" value="<?=$user['id']?>">
     <select name="pais">
        <?php foreach($paises as $pais){?>
            <option value="<?=$pais['id']?>"  <?=($pais['nicename']==$user['pais'])? 'selected' : '' ?> ><?=$pais['nicename']?></option> 
        <?php }?> 
    </select>
    <button type="submit">Editar</button>
</form>


