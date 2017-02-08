<?php
//inciamos sesion
session_start();
//comprobamos que tengamos el user en sesion
if(!isset($_SESSION['user']))
    header('Location: index.html');

//cargamos los errores desde la session
$errores = isset($_SESSION['errores']) ? $_SESSION['errores']: null;
//una vez guardados los errores , hacemos unset() para eliminar la variable errores de la seson
//Sino iriamos acumulando los errores y se mostrarian en todas las paginas aunque ya no esten
unset($_SESSION['errores']);

// Create connection
require('configDB.php');
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$limit=10;
$condicion = null;
//Sacamos la ruta de la pagina actual para conservar los parametros y no  perder la busqueda
$url = "$_SERVER[REQUEST_URI]";
//Con regex eliminamos el ?pag= o &pag= pra que no nos sume uno nuevo cada vez que cambiamos de pagina
$url = preg_replace("/[&?]pag=[0-9]+/","",$url);
//Si la ruta ya tiene algun parametro ( esta la ?) añadimos & para luego apadirle pag= en los enlaces de paginacion
if (strpos($url, '?') !== false)
    $url.="&";
//sino añadimos ? pag= en los enlaces de paginacion
else
    $url.="?";

// //mostramos el lso datos del request para enseñarlo
// var_dump($_REQUEST);

$pag = isset($_REQUEST['pag']) ? $_REQUEST['pag'] : 1;
$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;
$nombre = isset($_REQUEST['nombre']) ? $_REQUEST['nombre'] : null;
$apellido1 = isset($_REQUEST['apellido1']) ? $_REQUEST['apellido1'] : null;
$apellido2 = isset($_REQUEST['apellido2']) ? $_REQUEST['apellido2'] : null;
$pais = isset($_REQUEST['pais']) ? $_REQUEST['pais'] : null;

// la query con la relacion entre Usuarios y Pais
$sql = "SELECT usuarios.id AS id , nombre ,apellido1, apellido2 , country.nicename AS pais 
FROM usuarios , country WHERE country.id =id_pais";
//Sql para el total de la paginacion
$sqlCount= "SELECT count(*)  as total FROM usuarios , country WHERE country.id =id_pais ";

if($id!=null)
    $condicion[] = "usuarios.id LIKE '$id%'";
if($nombre!=null)
    $condicion[] = "nombre LIKE '$nombre%'";
if($apellido1!=null)
    $condicion[] = "apellido1 LIKE '$apellido1%'";
if($apellido2!=null)
    $condicion[] = "apellido2 LIKE '$apellido2%'";
if($pais!=null)
    $condicion[] = "country.nicename LIKE '$pais%'";

if($condicion!=null){
    $condicion = implode(" AND ", $condicion);
    $sql = $sql." AND ".$condicion;
    $sqlCount = $sqlCount." AND ".$condicion;
}
//Añadimos el offset y el limit a la query para paginar
$sql = $sql." LIMIT ".$limit." OFFSET ".($pag-1)*$limit;
////para mostrar la query y depurar
//var_dump($sql);

$result = $conn->query($sql);
//Recogemos el resultado de la query en $usuarios
//(sera un array donde cada elemento sera tmb un array con los campos de las columnas de la tabla)
$usuarios = mysqli_fetch_all($result,MYSQLI_ASSOC);
//ejecutamos la query de contar
$result = $conn->query($sqlCount);
$total= mysqli_fetch_all($result,MYSQLI_ASSOC);

$total= $total[0]['total'];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Administracion de Usuario</title>
</head>
<body>
<!--Codigo para mostrar los errores-->
<?php if($errores) {?>
    <ul style="color:red;">
        <?php foreach($errores as $error){?>
            <li><?=$error?></li>
        <?php }?>
    </ul>
<?php }?>

<!--Codigo tabla-->
<table width="100%" style="text-align:center;" border="1">
    <!--Cabecera tabla-->
    <thead>
    <tr>
        <th>#</th>
        <th>id</th>
        <th>nombre</th>
        <th>apellido1</th>
        <th>apellido2</th>
        <th>pais</th>
        <th>editar</th>
        <th>borrar</th>
        <th>galeria</th>
    </tr>
    <tr>
        <th><input type="checkbox" onClick="marcarTodos(this)"></th>
        <!--formulario para buscar en las cabeceras de la tabla -->
        <form action="tabla.php" id="formBuscar">
            <th><input type="text" name="id" value=""></th>
            <th><input type="text" name="nombre" value=""></th>
            <th><input type="text" name="apellido1" value=""></th>
            <th><input type="text" name="apellido2" value=""></th>
            <th><input type="text" name="pais" value=""></th>
            <th colspan="3"><button type="submit">Buscar</button></th>
        </form>
    </tr>
    </thead>
    <form action="borrar.php">
        <tbody>
        <!--por cada fila de la consulta cremos una fila en la tabla-->
        <?php
        //Para cada $user en $usuarios
        // for($i=0 ; i<count($usuarios))
        foreach($usuarios as $user) {
            ?>
            <tr>
                <td><input type="checkbox" name="marcarEliminar[]" class="marcarEliminar" value="<?=$user['id']?>"></td>
                <td><?=$user['id']?></td>
                <td><?=$user['nombre']?></td>
                <td><?=$user['apellido1']?></td>
                <td><?=$user['apellido2']?></td>
                <td><?=$user['pais']?></td>
                <td><a href="editar.php?id=<?=$user['id']?>">Editar</a></td>
                <td><a href="borrar.php?id=<?=$user['id']?>">Borrar</a></td>
                <td><a href="galeria.php?id=<?=$user['id']?>">Galeria</a></td>
            </tr>
        <?php } ?>
        </tbody>

</table>
<div>
    <!-- $paginas = rendodeamos hacia arriba el total ( el restultado de la query con count(*)
    partido de cada cuantos queremos paginar $limit , asi sacamos el total de paginas-->
    <?php $paginas= (ceil($total/$limit));
    //pintamos el enlace a las pagians
    for($i=0; $i<$paginas;$i++){?>
        <!-- pintamos el enlace a las pagians con la ruta que ya tenemos preparada en $url
        apadiendole el parametro pag con el numero de la pagina -->
        <a href="<?=$url."pag=".($i+1)?>"><?=$i+1?></a>
    <?php }?>

</div>
<a href="logout.php">Salirse</a>
<button type="submit">Borrar seleccionados</button>
<a href="formularioSubirImagen.php">Subir Imagenes</a>
</form>
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


