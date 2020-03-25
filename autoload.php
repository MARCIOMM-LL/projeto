<?php

spl_autoload_register(
    function (string $namespaceClasse): void {
        $caminho = "/src";
        $diretorio_classe = str_replace("\\", DIRECTORY_SEPARATOR, $namespaceClasse);
        #O arroba é pra suorimir o erro em caso de o arquivo possuir erros ou não existir
        @include_once getcwd() . $caminho . DIRECTORY_SEPARATOR . "{$diretorio_classe}.php";
    } 
);

?>
