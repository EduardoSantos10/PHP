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










?>