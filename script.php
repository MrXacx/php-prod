<?php

$categorias = [];
$categorias[] = "Infantil";
$categorias[] = "Adolescente";
$categorias[] = "Adulto";

// INPUT
$nome = $_POST["nome"];
$idade = $_POST["idade"];

// VALIDACAO
if (empty($nome) OR empty($idade)){
    echo "Preenha todos os campos para continuar.";
    return;
}
if (strlen($nome) <= 2 OR strlen($nome) > 40){
    echo "O nome deve ter entre 3 e 40 caracteres.";
    return;
}
if (!is_numeric($idade)){
    echo "Apresente um número para a idade.";
    return;
}



// EXECUCAO
if($idade >= 6 AND $idade <= 12){
    echo "O competidor " , $nome , " participa da categoria " , $categorias[0] , ".";
}

else if($idade >= 13 AND $idade <= 18 ){
    echo "O competidor " , $nome , " participa da categoria " , $categorias[1] , ".";
}

else if($idade >= 19 AND $idade <= 45){
    echo "O competidor " , $nome , " participa da categoria " , $categorias[2] , ".";
}

else{
    echo "Infelizmente a competição não comporta a sua faixa etária.";
}
?>