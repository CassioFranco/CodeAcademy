<?php

    $teste = "asd";
    echo "$teste global 1";
    echo "\n";

    if(5>2){
        $teste = "dsa";
        echo "$teste if";
        echo "\n";
    }

    echo "$teste global 2";
    echo "\n";

    function funcao(){
        $teste = "xsxs";
        echo "$teste local";
        echo "\n";
    }

    funcao();

    function testandoglobal(){
        global $teste;
        $teste = 2;
        echo "$teste global funçao";
    }
    
    testandoglobal();
    echo "\n";
    echo "$teste global 3";
    echo "\n";

    