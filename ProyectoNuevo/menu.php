<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<nav>
    <ul>
    <?php if(isset($_SESSION['user'])) { ?>
        <li><a  href="/logout.php">Salir</a></li>
    <?php }else {?> 
        <li><button type="button" class="btn-link" data-toggle="modal" data-target="#myModal">Login</button></li>
        <li><a  href="formularioBDD.php">Registrar</a></li>
    <?php  } ?>
    </ul>
</nav>