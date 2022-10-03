<?php

$valor = $_REQUEST['valor'];

function tabuada($valor){
    for($i = 1; $i <= 10; $i++){
        $resultado = $i*$valor;
        echo $i ." x ". $valor ." = ".$resultado."<hr>";
    }
}

tabuada($valor);








?>