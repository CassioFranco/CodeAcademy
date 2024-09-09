<?php 

    // as classes anônimas são criadas em uma variável e não possuem nome
    // elas funcionam como qualquer outra classe
    // para usa-la precisar fechar ela com ";" $anonima = new class(){};

    $pessoa = new class(){
        public $nome = "cassio";

        public function dizernome(){
            echo "ola meu nome é $this->nome \n";
        }
    };

    echo $pessoa -> nome . "\n";

    $pessoa->dizernome();