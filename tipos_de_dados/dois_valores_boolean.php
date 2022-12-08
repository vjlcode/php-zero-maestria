<?php

    $possuiFaculdade = true;


    if($possuiFaculdade) {
        echo "Possui Faculdade";
    } else {
        echo "Não possui";
    }

    if(is_bool($possuiFaculdade)) {
        echo 'É boolean';
    }