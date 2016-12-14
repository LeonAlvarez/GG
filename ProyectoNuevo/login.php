

<?php
require('validaciones.php');

$nick = isset($_REQUEST['Usuario_nick'])?$_REQUEST['Usuario_nick']:null;
$clave = isset($_REQUEST['Usuario_clave'])?$_REQUEST['Usuario_clave']:null;

$old = (object) compact('nick');

if (!validaRequerido($nick)) {
    $errores[] = 'El campo nick es obligatorio.';
    $old->nick=' ';
}
if (!validaRequerido($clave)) {
    $errores[] = 'La clave es obligatoria.';
}

//Si hay errores
if($errores){
    session_start();
    $_SESSION['errores'] = $errores;
    $_SESSION['old'] = $old;
    return header('Location: index.php');
    exit;
}

$conexion=mysqli_connect("localhost","root","","proyectochema") or
die("Problemas con la conexion");

$sql = "SELECT * FROM usuarios WHERE Usuario_nick = '{$nick}'";
try{
$result = mysqli_query($conexion,$sql)or die("Problemas en el select".mysqli_error($conexion));
$user = mysqli_fetch_array($result,MYSQLI_ASSOC);
} catch (\Exception $e) {
            die($e->getMessage());
}



//Si encontramos el usuario        
if($user){
    //Si esta bloqueado
    if($user['Usuario_bloqueado'])                
        return header('Location: error.html');
    //Si la contraseña coincide
    if(password_verify($clave ,$user['Usuario_clave'])){                
        $sql = "UPDATE usuarios SET Usuario_numero_intentos = '0' , Usuario_fecha_ultima_conexion = '".date("Y-m-d H:i:s")."' WHERE Usuario_id='{$user['Usuario_id']}'";
        mysqli_query($conexion,$sql)or die("Problemas en el select".mysqli_error($conexion));        
        session_start(); 
        $_SESSION['user'] = $user;
        //echo "bienvenido";
        return header('Location: perfil.php');  
    }
    //Si no coincide la contraseña
    else{ 
        $maxIntentos = 15; 
        //Si el numero itentos fallidos es >= que el maximo definido bloqueamos el usuario
        if($user['Usuario_numero_intentos']>=$maxIntentos){
        $sql = "UPDATE usuarios SET Usuario_bloqueado = '0' WHERE Usuario_id='{$user['Usuario_id']}'";
        mysqli_query($conexion,$sql)or die("Problemas en el select".mysqli_error($conexion));
        return header('Location: error.html');
        }
        //Sino sumamos un intento fallido y devolvemos el error
        else{
        $intentos = $user['Usuario_numero_intentos']++;
        $sql = "UPDATE usuarios SET Usuario_numero_intentos = '{$intentos}' WHERE Usuario_id='{$user['Usuario_id']}'";
        mysqli_query($conexion,$sql)or die("Problemas en el select".mysqli_error($conexion));
        session_start();
        $errores[] = 'Los datos no introducidos no coinciden.';
        $_SESSION['errores'] = $errores;
        //r($user);
        return header('Location: error.html'); 
        }
    }
//si el usuario no exsiste 
}else{
session_start();
$errores[] = 'Los datos no introducidos no coinciden.';
$_SESSION['errores'] = $errores;            
return header('Location: index.php');
}