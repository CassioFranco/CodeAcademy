<?php 

    $arr = [];


for($i = 0; $i <= 30; $i++){

    array_push($arr,$i);

}

// print_r($arr);

function arraymaiorquesete($array){

    $arrayreturn =[];

    for($j=0; $j < count($array); $j++){

        if($array [$j] > 7 ){

            array_push($arrayreturn,$array[$j]);

        }

    }

    return $arrayreturn;

}

    $novoarray = arraymaiorquesete($arr);

    print_r($novoarray);