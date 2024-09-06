<?php

    class Pessoa{
        function falar(){
            echo "olá pessoal!";
        }
    }

    $cassio = new Pessoa();

    $cassio -> nome = "cassio";
    
    echo $cassio -> nome;
    
    echo "\n";

    $cassio -> falar();