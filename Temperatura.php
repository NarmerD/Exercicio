<?php

    function converter(){
            for($i=0; $i<=3;$i++){
            $temp = [90, 77, 52, 12];
            $fahr = ($temp[$i] - 32)/1.8;

            echo "A conversão de $temp[$i] ºCelsius para Fahrenheit é: $fahr<br>";
        }
    }

    converter();

?>
