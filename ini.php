<?php
include('params.php');


spl_autoload_register('Autoload');


function Autoload($NomDeLaClasse) {

    $classDir = $NomDeLaClasse.'.php';
    
    if (file_exists($classDir).'.php') {
        require_once($classDir );
    } else {
        spl_autoload_register("appel");
   $str=new String("Bonjour"); 
    }
   
    
}

