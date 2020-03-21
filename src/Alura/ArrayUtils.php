<?php declare(strict_types = 1);

namespace Alura;

class ArrayUtils
{

    public static function remover(int $elemento, array &$array)
    {
        //A função nativa do php "array_search" procura um
        //valor em um array e, o paramêtro "$elemento" fala onde
        //está o valor que queremos remover e, o paramêtro "$array",
        //fala em que array se encontra
        $posicao = array_search($elemento, $array, true);

        if(is_int($posicao)){  
            unset($array[$posicao]);
        }else{
            echo "Não foi encontrado no array";
        }
    }

    public static function encontrarPessoasComSaldoMaior(int $saldo,array $array): array
    {
        $correntistasComSaldoMaior = array();

        foreach ($array as $chave => $valor) {
            if($valor > $saldo){
                $correntistasComSaldoMaior[] = $chave;
            }
        }
        return $correntistasComSaldoMaior;
    }

}

?>