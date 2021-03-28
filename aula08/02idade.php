<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interações entre PHP e HTML</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
<div>
    <?php
        //isset() verifica se o parâmetro foi configurado.
        $nome = isset($_GET["nome"])?$_GET["nome"]:"[Não informado]";
        $ano = isset($_GET["ano"])?$_GET["ano"]:"[Não informado]";
        $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[Não informado]";
        $idade = date("Y") - $ano;
        echo "$nome nasceu em $ano<br>Sexo: $sexo<br>Idade: $idade";
    ?>
    <a href="02exercicio.html">Voltar</a>
    
</div>
</body>
</html>