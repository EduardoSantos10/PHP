<?php
    $num1 = 0;
    $num2 = 0;


    function somar($num1, $num2) {
        return $num1 + $num2;
    }// Fim do méetodo

    function subtrair($num1, $num2) {
        return $num1 - $num2;
    }

    function multiplicar($num1, $num2) {
        return $num1 * $num2;
    }

    function dividir($num1, $num2) {
        if($num2 > 0) {
        return $num1 / $num2;
        } else {
            return "Impossivel dividir por zero";
        }
    }

    function mostrarNumeros($num1, $num2) {
        $resultado = "";
        for($i = $num1; $i <= $num2; $i++){
            $resultado .= "\n".$i;
        }
        return $resultado;
    }

    function verificarNumero($num1, $num2) {
        if($num1 < 0 && $num2 < 0) {
            return $num1." e ".$num2."\nsão negativos";
        }else if($num1 > 0 && $num2 > 0) {
            return $num1. " e " .$num2."\nesse numero é positivo";
        }else if($num1 < 0 && $num2 > 0 ){
            return $num1." é negativo e ".$num2." é positivo";
            
        }else{
            return $num2."é positivo e ".$num1."é negativo";
        }
    }

    function tabuada($num1) {
        $resultado = "";
        for($i = 0; $i <= 10; $i++){
            $resultado .= "\n".$num1." * ".$i." = ".($num1 * $i);
        }
        return $resultado;
    }










?>