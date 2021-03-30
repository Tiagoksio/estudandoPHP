<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de Repetição While</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
<div>
    <h1>Estrutura de Repetição While</h1>
    <?php
        $numInit = isset($_GET["numInit"])?$_GET["numInit"]:0;
        $numFim = isset($_GET["numFinal"])?$_GET["numFinal"]:0;
        $passo = isset($_GET["passo"])?$_GET["passo"]:1;
        if ($numInit < $numFim) {
            while ($numInit < $numFim) {
                echo "$numInit<br>";
                $numInit += $passo; 
            }
            echo "$numFim<br>";
        } elseif ($numInit > $numFim) {
            while ($numInit > $numFim) {
                echo "$numInit<br>";
                $numInit -= $passo;
            }
            echo "$numFim<br>";
        }
    ?>
    <a href="javascript:history.go(-1)">Voltar</a><!-- Voltar para a página anterior. Código em javaScript --> 
</div>
</body>
</html>