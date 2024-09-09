<?php

    class Animal{

        public $nome;

        function escolhernome($nome){
            $this ->nome =$nome;
        }

    }

    $amora = new Animal;

    echo "O nome do animal é: $amora->nome \n";

    $amora -> escolhernome("amora");

    echo "O nome do animal é: $amora->nome \n";