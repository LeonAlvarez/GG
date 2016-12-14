<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
require('configDB.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM country ";
   
$result = $conn->query($sql);

$paises = mysqli_fetch_all($result,MYSQLI_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
    <style>
    
        .container{
                text-align: center;
                border: 3px solid green;
                background-color: beige;
                font-family: fantasy;
        }
      
    </style>

<head>
 <title>Formulario BBDD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
  <h2>Formulario</h2>
  <br>
  <form enctype="multipart/form-data" method="post" action="agregar.php">
    <div class="form-group">
      <label for="nombre">Nombre:</label>
      <input type="text" class="form-control" name="Usuario_nombre" placeholder="Escribe su nombre" value="<?=isset($old) ? $old->nombre : '' ?>">
    </div>
    <div class="form-group">  
      <label for="apellido1">Primer Apellido:</label>
      <input type="text" class="form-control" name="Usuario_apellido1" placeholder="Escribe su primer apellido " value="<?=isset($old) ? $old->apellido1 : '' ?>" >
    </div>
    <div class="form-group">
      <label for="apellido2">Segundo Apellido:</label>
      <input type="text" class="form-control" name="Usuario_apellido2" placeholder="Escribe su segundo apellido" value="<?=isset($old) ? $old->apellido2 : '' ?>">
    </div>
    <div class="form-group">
      <label for="password">Clave:</label>
      <input type="password" class="form-control" name="Usuario_clave" placeholder="Escribe su clave"> 
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" name="Usuario_email" placeholder="Escribe su email" value="<?=isset($old) ? $old->email : '' ?>">
    </div>
    <div class="form-group">
      <label for="numTelefono">Telefono:</label>
      <input type="number" class="form-control" name="Usuario_telefono" placeholder="Escribe su telefono" value="<?=isset($old) ? $old->telefono : '' ?>">
    </div>
    <div class="form-group">
      <label for="fotografia">Imagen Personal:</label>
      <input type="file" class="form-control" name="Usuario_imagen">
    </div>
    <div class="form-group">
    <label for="pais">Pais</label>
      <select name="pais" class="form-control">
        <?php foreach($paises as $pais){?>
            <option value="<?=$pais['id']?>"><?=$pais['nicename']?></option>
        <?php }?>
      </select>
    </div>
    <button type="submit" class="btn btn-default">¡Registrar!</button>
  </form>
</div>  
</body>
</html>
<?php
unset($_SESSION['old']);
unset($_SESSION['errores']);
?> 