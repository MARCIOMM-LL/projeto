<?php
#Segundo o "PSR4" o nome do namespace deve ser o mesmo nome da pasta em questão e,
#o nome do arquivo.php, também deve conter o mesmo nome da classe em questão
spl_autoload_register(
    function (string $namespaceClasse): void {
        $caminho = "/src";
        $diretorio_classe = str_replace("\\", DIRECTORY_SEPARATOR, $namespaceClasse);
        #Devido ao "SPL4" a função spl_autoload_register não pode dar nenhum tipo de erro ou exceçao.
        #O arroba é para suprimir o erro em caso de o arquivo possuir algum ou não existir
        @include_once getcwd() . $caminho . DIRECTORY_SEPARATOR . "{$diretorio_classe}.php";
    } 
);

?>
