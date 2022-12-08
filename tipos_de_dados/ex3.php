<?php

    $produto = 200.50;
    $quantidade = 20;
    $resultado;

    $resultado = $produto * $quantidade;
    echo $resultado;

    if(is_float($produto)) {
        echo 'É float variavel $produto';
    }