<?php
//ini_set('error_reporting', E_ALL);
error_reporting(E_ALL);
ini_set('display_errors', 1);
/*
ini_set('log_errors', 1);
ini_set('error_log', '/var/log/minhaaplicacao');*/

set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    var_dump($errno, $errstr, $errfile, $errline);
    switch ($errno){
        case E_WARNING:
            echo "Aviso: Isso e perigoso";
            break;
        case E_NOTICE:
            echo "melhor nao fazer isso";
            break;
    }
    return true;
});
//notice
echo $variavel;
echo $array[12];

//warning
echo CONSTANTE;

