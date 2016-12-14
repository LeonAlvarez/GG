<?php
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

<form action="formularioPais.php">
    <select name="pais">
        <?php foreach($paises as $pais){?>
            <option value="<?=$pais['id']?>"><?=$pais['nicename']?></option>
        <?php }?>
    </select>
</form>