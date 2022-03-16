<?php
function defineCategoria (string $nome, string $idade) : ?string {

        $categorias = [];
        $categorias[] = "Infantil";
        $categorias[] = "Adolescente";
        $categorias[] = "Adulto";
    
        if (validaNome($nome) AND validaIdade($idade)){
            removerMensagemErro();
            if($idade >= 6 AND $idade <= 12){
                setarMensagemSucesso($mensagem = "O competidor " . $nome . " participa da categoria " . $categorias[0] . ".");
                return null;
            }
            
            else if($idade >= 13 AND $idade <= 18 ){
                setarMensagemSucesso($mensagem = "O competidor " . $nome . " participa da categoria " . $categorias[1] . ".");
                return null;
            }
            
            else if($idade >= 19 AND $idade <= 45){
                setarMensagemSucesso($mensagem =  "O competidor " . $nome . " participa da categoria " . $categorias[2] . ".");
                return null;
            }
            
            else{
                setarMensagemSucesso($mensagem =  "Infelizmente a competição não comporta a sua faixa etária.");
                return null;
            }
        }
        else{
            removerMensagemSucesso();
            return obterMensagemErro();
        }
    }
?>