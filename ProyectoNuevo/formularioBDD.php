<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
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
  <form enctype="multipart/form-data" method="post" action="agregarBDD.php">
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
      <label for="nick">Nickname:</label>
      <input type="text" class="form-control" name="Usuario_nick" placeholder="Escribe su nick" value="<?=isset($old) ? $old->nick: '' ?>">
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
      <label for="nif">NIF:</label>
      <input type="text" class="form-control" name="Usuario_nif" placeholder="Escribe su nif" value="<?=isset($old) ? $old->nif: '' ?>">
    </div>
    <div class="form-group">
      <label for="numTelefono">Telefono:</label>
      <input type="number" class="form-control" name="Usuario_telefono" placeholder="Escribe su telefono" value="<?=isset($old) ? $old->telefono : '' ?>">
    </div>
    <div class="form-group">
      <label for="fotografia">Imagen Personal:</label>
      <input type="file" class="form-control" name="Usuario_imagen">
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