<?php
    if(!isset($_SESSION))  
        session_start(); 
    unset($_SESSION['user']);
    return header("Location: /");
?>