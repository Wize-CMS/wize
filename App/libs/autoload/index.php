<?php

function load($namespace){
    $namespace = str_replace("\\","/",$namespace);
    $caminhoAbsoluto =  $_SERVER['PWD'] . '/' . $namespace . ".php";

    if (!file_exists($caminhoAbsoluto)) {
        $caminhoAbsoluto =  $_SERVER['PWD'] . '/App/libs/' . $namespace . ".php";
    }

    return include_once $caminhoAbsoluto;
}

spl_autoload_register(__NAMESPACE__ . "\load");
