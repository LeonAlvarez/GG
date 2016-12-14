<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

if(isset($_SESSION['user']))
    $user = $_SESSION['user'];

if(!$user)
    return header("Location: /");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Perfil de <?= $user['Usuario_nick']?></title>    
</head>
<body> 
    <?php require('menu.php')?>
    <ul>
        <li>Nombre : <?= $user['Usuario_nombre']?></li>
        <li>Apellido : <?= $user['Usuario_apellido1']?></li>
        <li>Apellido 2 : <?= $user['Usuario_apellido2']?></li>
        <li>Nick : <?= $user['Usuario_nick']?></li>
        <li>Imagen : <img class="profile-pic border-circle" src="data:image/jpeg;base64,<?= base64_encode($user['Usuario_imagen']); ?>"></li>
    </ul>
    <a  href="borrar.php?id=<?=$user['Usuario_id']?>">Borrar</a>
</body>
</html> 