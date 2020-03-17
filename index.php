<?php

    $notas = [9, 3, 10, 5];

    require 'calculadora.php';

    $calculadora = new Calculadora();
    $media = $calculadora->calculaMedia($notas);

    if($media){
        echo "A média é: $media";
    }else{
        echo "Não foi possível calcular a média";
    }

?>