<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisando números com estrutura For</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
<div>
    <h1>Análise de Números</h1>
    <?php
    $numero = isset($_GET['numero'])?$_GET['numero']:"Número Inválido";
    $totMult = 0;
    echo "<h2>Analisando o número $numero...</h2><br>";
    echo "Valores multiplo de $numero: ";
    for ($i=1; $i < $numero; $i++) { 
        if ($numero % $i == 0) {
            echo $i." ";
            $totMult++;
        }
    }
    echo "<br>Total de Multiplos: $totMult<br>";
    if ($totMult > 2) {
        echo "Resultado: $numero"." <strong style='color: red;'>NÃO É PRIMO!</strong>";
    } else {
        echo "Resultado: $numero"." <strong style='color: blue;'>É PRIMO!</strong>";
    }
    ?>
    <a href="javascript:history.go(-1)">Voltar</a>    
</div>
</body>
</html>
 