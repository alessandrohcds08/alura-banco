<?php
spl_autoload_register(function (string $nomeCompletoDaClasse) {
    $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoDaClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';
    if (file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
    }
});
/*
spl_autoload_register(function (string $nomeCompletoDaClasse):void {
    $caminhoArquivo = "/src";
    $diretorio_classe = str_replace('\\', DIRECTORY_SEPARATOR, $nomeCompletoDaClasse);
    @include_once getcwd() . $caminhoArquivo . DIRECTORY_SEPARATOR . "{$diretorio_classe}.php";
});*/