<?php

    require_once 'calculadora.php';

    $notas = [9, 3, 10, 5];

    $calculadora = new Calculadora();
    $media = $calculadora->calculaMedia($notas);

    if($media){
        echo "A média é: $media";
    }else{
        echo "Não foi possível calcular a média";
    }

?>