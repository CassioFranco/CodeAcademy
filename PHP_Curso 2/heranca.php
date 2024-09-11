<?php

    class Pessoa {
        public  $nome;
        public $idade;

        function __construct($nome, $idade){
            $this -> nome = $nome;
            $this -> idade = $idade;
            echo "Pessoa criada! \n";
        }
        function __destruct(){
            echo "Pessoa diz: Tchau!";
        }

        public function apresentar(){
            echo "{$this -> nome}, {$this->idade} anos \n";
        }
    }


    class Usuario extends Pessoa {

        public $login;

        function __construct($nome,$idade, $login){
            $this -> nome = $nome;
            $this -> idade = $idade;
            $this -> login = $login;
            echo "Usuario Criado! \n";
        }

        function __destruct(){
            echo "usuário diz: Tchau!! \n";
        }

        public function apresentar(){
            parent::aprensentar();
            echo "@{$this->login}: {$this->nome}, {$this->idade} anos \n";
        }

    }


    $usuario = new Usuario ("Cássio Franco", 21, "cassin");
    $usuario -> apresentar();