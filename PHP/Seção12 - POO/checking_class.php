<?php

    // em PHP temos alguns métodos que nos ajudam a entender as classes;
    // class_exist() => verefica se uma classe existe;
    // get_class_methodos() => verefica os métodos de uma classe;
    // get_class_vars() => mapeamento das propriedades de uma classe;

    class Humano {

        public $idade;
        public $nome;
        public $profissao;

        public function falar(){
            
        }

    }

    if(class_exists("Humano")){
        echo "a classe existe \n";
    }else{
        echo "a classe não existe";
    }

    print_r(get_class_vars("Humano"));

    print_r(get_class_methods("Humano"));
