<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de tarefas</title>
</head>
<body>
<h1>Gerenciador de tarefas</h1>
        <form>
            <fieldset>
                <legend>Nova tarefa</legend>
                <label>
                    Tarefa:
                    <input type="text" name="nome">
                </label>
                <input type="submit" value="cadastrar">
            </fieldset>
        </form>
</body>
</html>
</php
    if (array_key_exists("nome" $_GET)){
        echo $_GET["nome"];
    }
?>