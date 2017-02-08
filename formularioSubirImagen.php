<?php
//inciamos sesion
session_start();
//comprobamos que tengamos el user en sesion
if(!isset($_SESSION['user']))
    header('Location: index.html');

// Create connection
require('configDB.php');
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql="SELECT id , nombre FROM usuarios";

$result = $conn->query($sql);
//Recogemos el resultado de la query en $usuarios
//(sera un array donde cada elemento sera tmb un array con los campos de las columnas de la tabla)
$usuarios = mysqli_fetch_all($result,MYSQLI_ASSOC);
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subir imagen</title>
</head>
<body>
<form action="subirImagenUsuario.php" method="post" enctype="multipart/form-data">
    Selecciona la imagen para subirla
    <input type="file" name="fileToUpload" id="fileToUpload">
    <select name="user">
        <?php foreach($usuarios as $usuario){ ?>
            <option value="<?=$usuario['id']?>"><?=$usuario['nombre']?></option>
        <?php } ?>
    </select>
    <input type="submit" value="Upload Image" name="submit">
</form>
</body>
</html>
