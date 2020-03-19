<?php

    /*
    require_once 'calculadora.php';

    $notas = [9, 3, 10, 5];

    $calculadora = new Calculadora();
    $media = $calculadora->calculaMedia($notas);

    if($media){
        echo "A média é: $media";
    }else{
        echo "Não foi possível calcular a média";
    }
    */

    /*
    $saldos = [
                2500,
                3000,
                1000,
                3700,
                9000
              ];

    foreach ($saldos as $saldo) {
        echo "<p>O saldo é $saldo<p/>";
    }

    echo "<pre>";
    var_dump($saldos);

    sort($saldos);


    var_dump($saldos);
    echo "</pre>";

    echo "O menor saldo é $saldos[0]";
    */

    /*
    $nomes = "Giovanni, João, Maria, Pedro";

    $array_nomes = explode (", ", $nomes);

    foreach ($array_nomes as $nome) {
        echo "<p>$nome</p>";
    }

    //var_dump($array_nomes);

    $nomesJuntos = implode(", ", $array_nomes);

    echo $nomesJuntos;
    */

    require_once 'arrayutils.php';

    $correntistas_e_compras = [
                                "Giovanni",
                                12,
                                "Maria",
                                25,
                                "Luis",
                                "Luísa",
                                "12"
                              ];
echo "<pre>";

var_dump($correntistas_e_compras);                              
                              
ArrayUtils::remover("Giovanni", $correntistas_e_compras);   

var_dump($correntistas_e_compras); 

echo "</pre>";

?>