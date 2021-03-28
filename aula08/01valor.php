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
        $valor = $_GET["nValor"];
        echo "A raiz quadrada de $valor é ".number_format(sqrt($valor),2);
    ?>
    <a href="01exercicio.html">Voltar</a>
</div>
</body>
</html>