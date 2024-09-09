<?php

    // pelos construturos podemos inicializar objetos com valores de propriedades unicos para cada objeto;
    // passamos como argumentos os valores das propriedades;
    // function__construct($portas,$motor,$teto_solar){}


    class Car {

        public $portas;
        public $cor;
        public $marca;

        function __construct($portas,$cor,$marca){
            $this -> portas = $portas;
            $this -> cor = $cor;
            $this -> marca = $marca;
        }
    }

    $ferrari = new Car(4,"vermelha", "Ferrari");

    echo "O carro é da marca $ferrari->marca e tem a cor $ferrari->cor \n";

    $bmw = new Car (4,"verde", "BMW");
    echo "O carro é da marca $bmw->marca e tem a cor $bmw->cor \n";
