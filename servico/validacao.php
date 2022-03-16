<?php

function validaNome(string $nome) : bool {
    if (empty($nome)){
        setarMensagemErro($mensagem = "Preenha todos os campos para continuar.");
        return false;
    }
    if (strlen($nome) <= 2 OR strlen($nome) > 40){
        setarMensagemErro($mensagem = "O nome deve ter entre 3 e 40 caracteres.");
        return false;
    }
    if  (is_numeric($nome)){
        setarMensagemErro($mensagem = "Apresente um nome válido.");
        return false;
    }
    return true;
}
function validaIdade (string $idade) : bool {
    if (empty($idade)){
        setarMensagemErro($mensagem = "Preenha todos os campos para continuar.");
        return false;
    }
    if (!is_numeric($idade)){
        setarMensagemErro ($mensagem  = "Apresente um número para a idade.");
        return false;
    }
    return true;
}
?> 