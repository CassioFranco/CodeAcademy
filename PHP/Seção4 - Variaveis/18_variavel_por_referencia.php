<?php

    $x =10;
    $y =& $x;

    echo $x;
    echo "\n";
    echo $y;
    echo "\n";

    $y = 15;

    echo "Atribuições após ref 1";
    echo "\n";
    echo $x;
    echo "\n";
    echo $y;
    echo "\n";

    $y = 20;

    echo "Atribuições após ref 2";
    echo "\n";
    echo $x;
    echo "\n";
    echo $y;
    echo "\n";

    $nome ="cassio";
    $nome2 =& $nome;

    echo $nome;
    echo "\n";
    echo $nome2;
    echo "\n";

    $nome2 = "joão";

    echo $nome;
    echo "\n";
    echo $nome2;
    echo "\n";