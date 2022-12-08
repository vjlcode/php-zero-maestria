<?php

    class Pessoa {
        function falar() {
            echo "Olá pessoal";
        }
    }

    $vilson = new Pessoa();

    $vilson->nome = "Vilson";

    echo $vilson->nome;

    echo "<br>";

    $vilson->falar();