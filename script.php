<?php

session_start();

$categorias = [];
$categorias[] = "Infantil";
$categorias[] = "Adolescente";
$categorias[] = "Adulto";

// INPUT
$nome = $_POST["nome"];
$idade = $_POST["idade"];

// VALIDACAO
if (empty($nome) OR empty($idade)){
    $_SESSION["mensagem-de-erro"] = "Preenha todos os campos para continuar.";
    header("location: index.php");
    die();
}
if (strlen($nome) <= 2 OR strlen($nome) > 40){
    $_SESSION["mensagem-de-erro"] = "O nome deve ter entre 3 e 40 caracteres.";
    header("location: index.php");
    die();
}
if  (is_numeric($nome)){
    $_SESSION["mensagem-de-erro"] = "Apresente um nome válido.";
    header("location: index.php");
    die();
}
if (!is_numeric($idade)){
    $_SESSION["mensagem-de-erro"] = "Apresente um número para a idade.";
    header("location: index.php");
    die();
}

// EXECUCAO
if($idade >= 6 AND $idade <= 12){
    $_SESSION["mensagem-de-sucesso"] = "O competidor " . $nome . " participa da categoria " . $categorias[0] . ".";
    header("location: index.php");
    die();
}

else if($idade >= 13 AND $idade <= 18 ){
    $_SESSION["mensagem-de-sucesso"] = "O competidor " . $nome . " participa da categoria " . $categorias[1] . ".";
    header("location: index.php");
    die();
}

else if($idade >= 19 AND $idade <= 45){
    $_SESSION["mensagem-de-sucesso"] =  "O competidor " . $nome . " participa da categoria " . $categorias[2] . ".";
    header("location: index.php");
    die();
}

else{
    $_SESSION["mensagem-de-sucesso"] =  "Infelizmente a competição não comporta a sua faixa etária.";
    header("location: index.php");
    die();
}
?>