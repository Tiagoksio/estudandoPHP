<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de Repetição For</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
<div>
    <?php
        $numTab = isset($_GET["numTab"])?$_GET["numTab"]:1;
        echo "<h1>Tabuada de $numTab</h1>";
        for ($i=1; $i <= 10 ; $i++) { 
            echo "$numTab X ".$i." = ".($numTab*$i)."<br>";
        }
    ?>
    <a href="javascript:history.go(-1)">Voltar</a><!-- Voltar para a página anterior. Código em javaScript --> 
</div>
</body>
</html>