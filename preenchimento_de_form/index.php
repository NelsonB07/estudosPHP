<?php 


    $usuario = [
        'nome' => "Nelson",
        'idade' => 27,
        'profissao' => "Programador"
    ];

    if($usuario) {

        $nome = $usuario['nome'];
        $idade = $usuario['idade'];
        $profissao = $usuario['profissao'];

    }
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preenchimento de Form</title>
</head>
<body>
    <form action="">
        <div>
            <input type="text" name="nome" id="" placeholder="Digite seu nome..." value="<?= $nome ?>">
        </div>
        <div>
            <input type="text" name="idade" id="" placeholder="Digite sua idade..." value="<?= $idade ?>">
        </div>
        <div>
            <input type="text" name="profissao" id="" placeholder="Digite sua profissão..." value="<?= $profissao ?>">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>