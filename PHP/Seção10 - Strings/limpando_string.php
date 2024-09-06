<?php


    // trim($str1); = limpa espaços antes e depois da string.
    // rtrim($str1); = limpa espaços a direita da string.
    // ltrim($str1); = limpa espaçõs a esquerda da string.



    $str1 = "    cassio     ";

    echo "essa é uma string 1: $str1. \n";

    $str1Limpa = trim($str1);

    echo "essa é a string 1: $str1Limpa. \n";