<?php
//inciamos sesion
session_start();
//comprobamos que tengamos el user en sesion
if(!isset($_SESSION['user']))
    header('Location: index.html');

$userId = isset($_REQUEST['id'])? $_REQUEST['id'] :null;

if(!$userId)
    header('Location: tabla.php');

// Create connection
require('configDB.php');
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM fotos_usuario WHERE user_id=$userId";
$result = $conn->query($sql);
//var_dump($sql);
//Recogemos el resultado de la query en $usuarios
//(sera un array donde cada elemento sera tmb un array con los campos de las columnas de la tabla)
$fotos = mysqli_fetch_all($result,MYSQLI_ASSOC);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="borrarFotos.php">
<table>
    <tr>
        <?php foreach($fotos as $foto){?>
            <td><img src="<?=$foto['ruta']?>" width="300px"></td>
        <?php } ?>
    </tr><tr>
        <?php foreach($fotos as $foto){?>
            <td><input type="checkbox" name="marcarEliminar[]" value="<?=$foto['id']?>"></td>
        <?php } ?>
    </tr>
    <tr>
        <td><label for="todos">Marcar todos:</label><input type="checkbox" onClick="marcarTodos(this)"></td>
        <td><button type="submit">Borrar seleccionados</button></td>
    </tr>
</table>
</form>
</body>
<script>
    function marcarTodos(source) {
        console.log(source.checked);
        checkboxes = document.getElementsByName('marcarEliminar[]');
        for(var i=0; i<checkboxes.length ; i++)
            checkboxes[i].checked = source.checked;
    }
</script>
</body>
</html>
