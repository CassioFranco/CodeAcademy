<?php

    class Pessoa{
        function falar(){
            echo "olá, eu sou um objeto! \n";
        }

        function somar ($x, $y){
            echo $x + $y . "\n";
        }

    }

    $cassio = new Pessoa;
    $cassio -> falar();
    $cassio -> falar();

    $pedro = new Pessoa;

    $cassio -> somar(2,2);

    $pedro ->somar(10,12);