<?php

include "./servico/categoria.php";
include "./servico/validacao.php";
include "./servico/mensagemSessao.php";

$nome = $_POST["nome"];
$idade = $_POST["idade"];

defineCategoria($nome, $idade);

header ("location: index.php");
?>