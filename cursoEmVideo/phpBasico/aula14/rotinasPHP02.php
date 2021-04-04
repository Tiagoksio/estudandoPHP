<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotinas em PHP</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
<div>
    <h1>Rotinas em PHP</h1>
    <h2>Rotinas Externas</h2>
    <p>Para incluirmos uma rotina externa, basta efetuarmos o include da fonte, e efetuarmos a chamado conforme foi escrita em sua origem. A forma parece muito com os headers da linguagem C</p>
    <p>Segue abaixo, uma saída de uma função externa</p>
    <?php
        include "funcoes.php";
        olaMundo();
    ?>
    <p>Além do <strong>"include"</strong>, temos também o <strong>"require"</strong>, que torna imprensidível o carregamento das funções para a renderização da página. Desses 2, temos 2 variações, o <strong>"include_once"</strong> e o <strong>"require_once"</strong> para quando o comando seja necessário apenas <strong>uma vez</strong></p>
</div>
</body>
</html>