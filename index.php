<?php declare(strict_types=1);

namespace Alura;

require_once 'autoload.php';

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

    /*
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
                              
ArrayUtils::remover(12, $correntistas_e_compras);   

var_dump($correntistas_e_compras); 

echo "</pre>";
*/

/*
$correntistas = [
    "Giovanni",
    "João",
    "Maria",
    "Luis",
    "Luisa",
    "Rafael"
  ];
  
  $correntistasNaoPagantes = [
    "Luis",
    "Luisa",
    "Rafael",
  ];

  $correntistasPagantes = array_diff ($correntistas, $correntistasNaoPagantes);

  echo "<pre>";
    var_dump ($correntistasPagantes);
  echo "</pre>";
  */

  /*
  $correntistas = [
    "Giovanni",
    "João",
    "Maria",
    "Luis",
    "Luisa",
    "Rafael"
  ];
  
  $saldos = [
     2500,
     3000,
     4400,
     1000,
     8700,
     9000
  ];

  $relacionados = array_merge ($correntistas, $saldos);

  echo "<pre>";
  var_dump ($relacionados);
  echo "</pre>";
  */

  /*
  $correntistas = [
    "Giovanni",
    "João",
    "Maria",
    "Luis",
    "Luisa",
    "Rafael"
  ];
  
  $saldos = [
     2500,
     3000,
     4400,
     1000,
     8700,
     9000
  ];
  
  $relacionados = array_combine($correntistas, $saldos);
  
  $relacionados["Matheus"] = 4500;

  echo "<pre>";
  var_dump ($relacionados);
  echo "</pre>";
  */

  $correntistas = [
    "Giovanni",
    "João",
    "Maria",
    "Luis",
    "Luisa",
    "Rafael"
  ];
  
  $saldos = [
     2500,
     3000,
     4400,
     1000,
     8700,
     9000,
  ];

  /*
  $correntistas = [
    "Giovanni" => 2500,
    "João" => 3000,
    "Maria" => 4400,
    "Luis" => 1000,
    "Luisa" => 8700,
    "Rafael" => 9000
  ];
  */
  
  $relacionados = array_combine ($correntistas, $saldos);

  if(array_key_exists("João", $relacionados)){
    echo "O saldo do João é: {$relacionados["João"]}";
  }else{
    echo "Não foi encontrado";
  }  
  
  $maiores = ArrayUtils::encontrarPessoasComSaldoMaior(3000, $relacionados);

  echo "<pre>";
    var_dump($maiores);
  echo "</pre>";

?>