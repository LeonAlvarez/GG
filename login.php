<?php

require('configDB.php');


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
var_dump($_REQUEST);
$email = $_REQUEST['email'];
$clave = $_REQUEST['pass'];

$sql = "SELECT * FROM usuarios WHERE email='$email' LIMIT 1";

$result = $conn->query($sql);
$user = $result->fetch_assoc();
// Si hay algun user con ese email
if($user){
    // Si la contraseña es correcta
    if(password_verify($clave ,$user['clave'])){  
        session_start(); 
        $_SESSION['user']=$user;
        header('Location: tabla.php');
    // si la contraseña esta mal
    }else{
        echo "contraseña incorrecta";
    }
}
else
    echo "no existe el user";



