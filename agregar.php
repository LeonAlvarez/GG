
<?php

require('validaciones.php');

$nombre = isset($_REQUEST['Usuario_nombre'])?$_REQUEST['Usuario_nombre']:null;
$apellido1 = isset($_REQUEST['Usuario_apellido1'])?$_REQUEST['Usuario_apellido1']:null;
$apellido2 = isset($_REQUEST['Usuario_apellido2'])?$_REQUEST['Usuario_apellido2']:null;
$nick = isset($_REQUEST['Usuario_nick'])?$_REQUEST['Usuario_nick']:null;
$clave = isset($_REQUEST['Usuario_clave'])?$_REQUEST['Usuario_clave']:null;
$email = isset($_REQUEST['Usuario_email'])?$_REQUEST['Usuario_email']:null;
$nif = isset($_REQUEST['Usuario_nif'])?$_REQUEST['Usuario_nif']:null;
$telefono = isset($_REQUEST['Usuario_telefono'])?$_REQUEST['Usuario_telefono']:null;
$token = hash('ripemd160', time().rand(1,999));
$fecha = date("Y-m-d H:i:s");
$bloqueado= 1;
$imagen = isset($_FILES['Usuario_imagen']['tmp_name'])?$_FILES['Usuario_imagen']['tmp_name']:null;
$tamanio = isset($_FILES['Usuario_imagen']['size'])?$_FILES['Usuario_imagen']['size']:null;


$old = (object) compact('nombre','apellido1','apellido2','nick',
                        'email','nif','telefono');
$errores=[];

if (!validaRequerido($nombre)) {
    $errores[] = 'El campo nombre es obligatorio.';
    $old->nombre=' ';
}
if (!validaRequerido($apellido1)) {
    $errores[] = 'El primer apellido es obligatorio.';
    $old->apellido1 = ' ';
}
if (!validaRequerido($apellido2)) {
    $errores[] = 'El segundo apellido es obligatorio.';
    $old->apellido2 = ' ';
}
if (!validaRequerido($nick)) {
    $errores[] = 'El nick  es obligatorio.';
    $old->nick = ' ';
}
if (!validaRequerido($clave)) {
    $errores[] = 'La clave  es obligatoria.';
    $old->clave= ' ';
}
if (!validaRequerido($email)) {
    $errores[] = 'El correo electronico es obligatorio.';
    $old->email = ' ';
}
if (!validaRequerido($nif)) {
    $errores[] = 'El nif es obligatorio.';
    $old->nif = ' ';
}
if (!validaRequerido($imagen)) {
    $errores[] = 'La imagen es obligatoria.';
}

//Si hay errores
if($errores){
    session_start();
    $_SESSION['errores'] = $errores;
    $_SESSION['old'] = $old;
    return header('Location: formularioBDD.php');
    exit;
}


$contenido=null;
if($imagen){
    $fp = fopen($imagen, 'r');  // open a file handle of the temporary file
    $contenido  = fread($fp,$tamanio); // read the temp file
    fclose($fp); // close the file handle  
    $imagen = $contenido;
}

$sql = "INSERT INTO usuarios (Usuario_nombre,Usuario_apellido1,Usuario_apellido2,Usuario_nick, 
Usuario_clave,Usuario_email,Usuario_nif,Usuario_telefono,Usuario_token,Usuario_fecha_registro,Usuario_bloqueado,Usuario_imagen) values 
                       ('$nombre','$apellido1','$apellido2','$nick','".password_hash($clave , PASSWORD_DEFAULT)."','$email','$nif','$telefono','$token','$fecha','$bloqueado', '".addslashes($imagen)."');";


$conexion=mysqli_connect("localhost","root","","proyectochema") or
die("Problemas con la conexion");

try{
mysqli_query($conexion,$sql)or die("Problemas en el select".mysqli_error($conexion));

} catch (\Exception $e) {
            die($e->getMessage());
} 


$msg = "Verifica tu correo pinchando aqui: localhost/desbloquear.php?id=".mysqli_insert_id($conexion)."&token=".$token;
$msg2="\n Tu contrasena es: \n".$clave;
$msg = wordwrap($msg,70);

mail($email,"Correo de Verificacion de la BDD",$msg.$msg2);

mysqli_close($conexion);

echo "El alumno fue dado de alta.";
?>