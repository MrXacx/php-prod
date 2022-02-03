<?php

$categorias = [];
$categorias[] = "Infantil";
$categorias[] = "Adolescente";
$categorias[] = "Adulto";

$nome = "Ariel";
$idade = 23;

if($idade >= 6 AND $idade <= 12){
    echo "O competidor " , $nome , " participa da categoria " , $categorias[0];
}

if($idade >= 13 AND $idade <= 18 ){
    echo "O competidor " , $nome , " participa da categoria " , $categorias[1];
}

if($idade >= 19 AND $idade <= 45){
    echo "O competidor " , $nome , " participa da categoria " , $categorias[2];
}

else{
    echo "Infelizmente a competição não comporta a sua faixa etária.";
}

?>