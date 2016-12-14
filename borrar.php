<?php

require('configDB.php');

$id = $_REQUEST['id'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE  FROM usuarios WHERE id='$id'";
$result = $conn->query($sql);

header('Location: tabla.php');
