<?php

    echo 'testando texto de aspas simples <br>';
    echo " ola mundo 'das ' aadas <br>";

    $idade = 15;

    echo "Ele tem $idade anos <br>";
    echo 'Ele tem $idade anos <br>'; // esse não funciona

    if(is_string($idade)) {
        echo "É string";
    }