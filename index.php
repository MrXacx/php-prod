<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Formulário de inscrição</title>
    <meta charset="UTF-8">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Formulário de inscrição para o VI Torneio de Natação</h1>
    <form  id="input" action="script.php" method="post" >

        <?php
            /* atribui o valor do $_SESSION a $error
               caso o if seja falso, o $_SESSION não terá valor e $error não passará no if*/
            $error = isset($_SESSION["mensagem-de-erro"]) ? $_SESSION["mensagem-de-erro"] : "";
            if(!empty("error")){
                echo $error;
            }
        ?>
        <p> Seu nome: 
        <input type="text" name="nome"/>
        </p>
        <p> Sua idade: 
        <input type="text" name="idade"/>
        </p>
        <p> <input type="submit" value="Consultar inscrição"/></p>
        <?php
        $sucess = isset($_SESSION["mensagem-de-sucesso"]) ? $_SESSION["mensagem-de-sucesso"] : "";
        if(!empty("sucess")){
            echo $sucess;
        }     
        ?>
    </form>
</body>
</html>