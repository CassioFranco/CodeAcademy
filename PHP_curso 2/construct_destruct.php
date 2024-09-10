<?php

    class Pessoa {
        public $nome;
        public $idade;

        function __construct($novonome, $idade){
            echo "construtor invocado! \n";
            $this -> nome = $novonome;
            $this -> idade = $idade;
            
        }

        function __destruct(){
            echo "e morreu! \n";
        }

        public function aprensentar(){
            echo "{$this->nome}, {$this->idade} anos \n";
        }
    }


    $pessoa =new Pessoa ("rebeca",40);
    $pessoa -> aprensentar();
    unset($pessoa);

    $pessoa2 =new Pessoa ("joao",55);
    $pessoa2 -> aprensentar();
    $pessoa2 = null; 