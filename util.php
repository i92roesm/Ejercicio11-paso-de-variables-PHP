<?php

function printVD($data) {
    echo '<pre>' . var_export($data, true) . '</pre>';
}

// esta devuelve

function prettyVardump($data) {
    return '<pre>' . var_export($data,true) . '</pre>';
} 
 // funcion para habilitar errores
function enableErrors(){
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}
// lo arreglo todo con una funcion


// function read($nombre) {
    
//     $valor= null;
//     if(isset($_POST[$nombre])){
//         $valor = $_POST[$nombre];
//     }else if(isset($_GET[$nombre])){
//         $valor = $_GET[$nombre];
//     }
//     return $valor;
// }
// que ñe si es pos o get 
function read($name){
    $value = check($name, $_POST);
    if($value == null){// si da nulo será GET
        $value = check($name, $_GET);
    }
    return $value;
}

function check($name, $array){ // la llamo desde read
    $value=null;// si no entra en el if es que no es de ese método...
    if(isset($array[$name])){
        $value = $array[$name];
    }
    
    return $value;// devuelve null si no es del tipo POST o GET
}
// funcion de Carmen que muestra lo que recibe cada cosa

// function textoInicio(){
//     $final='';
//     foreach ($_GET as $clave => $valor) {
//         $final .= "GET--> ".$clave." recibido es ".$valor."<br>";
//     }
//     foreach ($_POST as $clave => $valor) {
//         $final .= "POST--> ".$clave." recibido es ".$valor."<br>";
//     }
//     return $final;
// }

function esIgual($pass1,$pass2){
    
    if($pass1 == $pass2){
        return true;
    }else{
        return false;
    }
}