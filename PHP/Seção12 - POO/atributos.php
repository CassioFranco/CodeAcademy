<?php

    class Car{

        public $rodas = 4;
        public $aro = 20;
        public $cor = "vermelha";

        function ligar(){
            echo "vrumm \n";
        }

    }

    $ferrari = new Car;

    echo $ferrari ->aro . "\n";
    echo $ferrari -> rodas . "\n";

    $ferrari -> cor = "azul";
    echo $ferrari -> cor;

    $ferrari -> ligar();