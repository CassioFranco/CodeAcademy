<?php

    // as interfaces criam um modelo de definição de uma classe
    //  toda classe que implementar uma interface, devera implementar tambem suas propriedades e metodos OBRIGATORIAMENTE.
    // é utilizada atraves de "implements"

    interface Caracteristicas{
        const nome = "cassio";

        public function falar();

    }

    class Humano implements Caracteristicas {
        public $idade = 29;

        public function falar(){
            echo "olá mundo! \n";
        }

        public function dizernome(){
        echo "meu nome é " . self::nome . "\n";
        }
    }

    $cassio = new Humano;
    $cassio ->falar();