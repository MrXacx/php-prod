<?php

$categorias = [];
$categorias[] = "Infantil";
$categorias[] = "Adolescente";
$categorias[] = "Adulto";

$nome = "Ariel";
$idade = 12;

if($idade >= 6 AND $idade <= 12){
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == "Infantil"){
            echo "O competidor " , $nome , " participa da categoria " , $categorias[0];
        }
    }
}
if($idade >= 13 AND $idade <= 18 ){
    for($i = 0; $i <= count($categorias); $I++){
        if($categorias[$i] == "Adolescente"){
            echo "O competidor " , $nome , " participa da categoria " , $categorias[0];
        }
    }
}
if($idade >= 19 AND $idade <= 45){
    for($i = 0; $i <= count($categorias); $I++){
        if($categorias[$i] == "Adulto"){
            echo "O competidor " , $nome , " participa da categoria " , $categorias[0];
        }
    }
}
/*else{
    echo "Infelizmente a competição não comporta a sua faixa etária.";
}*/

?>