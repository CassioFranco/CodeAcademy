<?php

    echo 5/2;
    echo "\n";

    if(is_float(5/2)){
        echo "É float";
        echo "\n";
    }

    echo 2 . 3;
    echo "\n";

    if(is_string(2 . 3)){
        echo "É string";
        echo "\n";
    }

    $nome = 'cassio';
    $sobrenome = "franco";
    
    $nomecompleto = $nome ." ". $sobrenome;

    echo ($nomecompleto);
    echo "\n";