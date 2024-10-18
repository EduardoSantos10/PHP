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

    function fatorial($num1) {
        $num1;
        $res = 1;

        $num1 = "$num1";

        $i = 1;
        while($num1 > $i){
            $res = $res * $num1;
            $num1 = $num1 - 1;

        }
        return $res;

    }

    function parImpar($num1){
        $total = "";

        if($num1 % 2 == 0){
            $total = "Par";

        }else{
            $total = "Impar";
        }
        return $total;
    }

    function ordemCrescente($num1, $num2) {
        if($num1 > $num2) {
            return "O primeiro número é maior";
        }else{
            return "O segundo número é maior";
        }


    }

    function primo($num1){
        if( $num1 == 2 || $num1 == 3 || $num1 == 5){
            return "O número digitado é primo";
        }else if($num1 % 2 == 0 || $num1 % 3 == 0 || $num1 % 5 == 0){
            return "O numero digitado é primo";
        }else{
            return "O número digitado não é primo";
        }
    }

    function media($num1, $num2, $num3) {
        $media = 0;
        $media = ( $num1 + $num2 + $num3 ) / 3;
        return $media;

    }

    function potencia($num1, $num2) {
        $pot = "";

        pow.($num1 ** $num2);

        return $pot;

    }
        

    
    

    










?>