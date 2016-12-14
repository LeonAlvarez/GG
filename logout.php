<?php 
session_start();
if(isset($_SESSION['user'])){
    // remove all session variables
    unset($_SESSION);   
    // destroy the session
    session_destroy();
}
header('Location: index.html');
//var_dump($_SESSION['user']);
//header('Location: index.html');

