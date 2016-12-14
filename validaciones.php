<?php

/**
* Validate a Required input.
*
* @param  string $valor
*/
function validaRequerido($valor){
    if(trim($valor) == ''){
        return false;
    }else{
        return true;
    }
}

/**
* Validate if input is integer.
*
* @param  string $valor
* @param  array $opciones
*/
function validarEntero($valor, $opciones=null){
    if(filter_var($valor, FILTER_VALIDATE_INT, $opciones) === FALSE){
        return false;
    }else{
        return true;
    }
}

/**
* Validate if input is valid email.
*
* @param  string $email
*/
function validaEmail($email){
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE){
        return false;
    }else{
        return true;
    }
}
?>