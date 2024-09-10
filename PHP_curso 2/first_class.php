<div class="titulo">Primeira Classe</div>

<?php

    class Cliente {
        //atributos
        public $nome = "Anônimo";
        public $idade = 18;


        
        public function apresentar(){
            return "Nome: {$this -> nome} Idade: {$this -> idade} \n";
        }
    }

    $c1 = new Cliente();
    $c1 -> nome = "Ana silva";
    $c1 -> idade = 27;
    $c1 -> apresentar();
    
    $c2 = new Cliente;
    $c2 -> nome = "gabriel";
    $c2 -> idade = 43;
    $c2 -> apresentar();