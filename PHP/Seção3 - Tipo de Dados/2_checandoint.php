<?php
    if(is_int(5)) {
        echo "É um inteiro";
        echo "\n";
    }
    if(is_int("não é int")){
        echo "Não é um inteiro";
        echo "\n";
    }

    $a=10;

    if(is_int($a)){
        echo "É um inteiro";
        echo "\n";
    }