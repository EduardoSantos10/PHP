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
        
        $pot = (pow($num1, $num2));

        return $pot;

    }

    function raiz($num1){
        $res = (sqrt($num1));

            return $res;
    }

    function vogais($str){ // adicionei um parametro
        $cont = strlen($str); // determina o tamanho de uma stsring
        $contar = 0; // adicionei um valor de zero na variavel
        $verificar = ""; // declarei a variavel sem valor
        for($i=0;$i<$cont;$i++){ // For -> para ver o tamanho da string, enquanto for menor, ele vai aumentar
            $verificar = substr($str, $i, 1);
            if(($verificar == 'a') || ($verificar == 'e') || ($verificar == 'i') || ($verificar == 'o') ||($verificar == 'u')){
                $contar++;
            }
        }//Fim do for
        return "\nExistem ".$contar." vogais na palavra!";
    }//Fim do metodo

    function inverter($res){
        $res = strrev($res);

        return $res;
    }

    function um($num1, $num2){

        $res = 0;

        $cont = 0;

        $res = $num1 + $num2;

        $cont = $res * $num2;

        return $cont;

    }

    function dois($num1, $num2, $num3){
        $media = 0;
        $media = ( $num1 + $num2 + $num3 ) / 3;
        return $media;
    }

    function tres($num1){
        $res = (($num1 * 15)/100);

        return $res;
    }

    function quatro($num1){
        $res = ((($num1 * 5 ) *50 )/100);

        return $res;
    }

    function cinco($num1, $num2){
        
        $res1 = $num1 * $num1;
        $res2 = $num2 * $num2;
        
        $final = $res1 + $res2;

        return $final;
    }

    function seis($num1){
    
        $res = $num1 * 000.1;

        return $res;

    }
    
        

    
    

    










?>